<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data['title']='';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $data['title'] = ' in '.$category->category;
        }
        $data['blogs'] = Blog::where(['is_active' => 1])->latest()->filter(request(['search', 'category']))->get();
        return view('blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::get();
        return view('blog.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'required|image|file|max:1024',
        ]);

        $blogImage = $request->file('image')->store('blog');

        $slug = Str::slug($request->title);
        $firstSlug = $slug;
        $checkSlug = Blog::where(['slug' => $slug])->first();

        $value = 1;
        while($checkSlug){
            $slug = $firstSlug.'-'.$value;
            $checkSlug = Blog::where(['slug' => $slug])->first();
            $value += 1;
        }

        Blog::create([
            'user_id' => auth()->user()->id,
            'slug' => $slug,
            'category_id' => $request->category,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $blogImage,
        ]);

        return redirect('/dashboard')->with('status', 'Berhasil membuat post baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        if($blog->is_active == 0){
            return abort(404);
        }
        
        $data['blog']= $blog;
        $data['user'] = User::where(['id'=> $blog->user_id])->first();
        $data['comments'] = Comment::where(['type'=> 1, 'post_id' => $blog->id])->latest()->get();
        return view('blog.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $data['blog'] = $blog;
        $data['categories'] = Category::get();
        return view('blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        if(auth()->user()->id != $blog->user_id){
            return abort(403);
        }

        if($request->file('image')){
            // delete gambar lama
            Storage::delete($blog->image);
            $blogImage = $request->file('image')->store('blog');
            $updateData['image'] = $blogImage;
        }

        $updateData['title'] = $request->title;
        $updateData['content'] = $request->content;
        $updateData['category_id'] = $request->category;

        $blog->update($updateData);

        return redirect('/dashboard')->with('status', 'Berhasil update blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if(auth()->user()->id != $blog->user_id){
            return abort(403);
        }
        Storage::delete($blog->image);

        $blog->delete();
        return back()->with('status', 'Berhasil menghapus blog');
    }

    public function uploadImage(Request $request)
    {
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'-'.time().'.'.$extension;

            $request->file('upload')->move(public_path('assets/images/blog'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/assets/images/blog/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset-utf-8');
            echo $response;
        }
    }
}
