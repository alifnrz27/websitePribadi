<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['projects'] = Project::where(['is_active' => 1])->latest()->get();
        return view('project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
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
            'image' => 'required|image|file|max:1024',
        ]);

        $projectImage = $request->file('image')->store('project');

        $slug = Str::slug($request->title);
        $firstSlug = $slug;
        $checkSlug = Project::where(['slug' => $slug])->first();

        $value = 1;
        while($checkSlug){
            $slug = $firstSlug.'-'.$value;
            $checkSlug = Project::where(['slug' => $slug])->first();
            $value += 1;
        }

        Project::create([
            'user_id' => auth()->user()->id,
            'slug' => $slug,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $projectImage,
        ]);

        return redirect('/dashboard')->with('status', 'Berhasil membuat project baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        if($project->is_active == 0){
            return abort(404);
        }

        $data['project']= $project;
        $data['user'] = User::where(['id'=> $project->user_id])->first();
        $data['comments'] = Comment::where(['type'=> 2, 'post_id' => $project->id])->latest()->get();
        return view('project.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('project.edit', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        if(auth()->user()->id != $project->user_id){
            return abort(403);
        }

        if($request->file('image')){
            // delete gambar lama
            Storage::delete($project->image);
            $projectImage = $request->file('image')->store('project');
            $updateData['image'] = $projectImage;
        }

        $updateData['title'] = $request->title;
        $updateData['content'] = $request->content;

        $project->update($updateData);

        return redirect('/dashboard')->with('status', 'Berhasil update project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if(auth()->user()->id != $project->user_id){
            return abort(403);
        }
        Storage::delete($project->image);

        $project->delete();
        return back()->with('status', 'Berhasil menghapus project');
    }

    public function uploadImage(Request $request)
    {
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'-'.time().'.'.$extension;

            $request->file('upload')->move(public_path('assets/images/project'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/assets/images/project/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset-utf-8');
            echo $response;
        }
    }
}
