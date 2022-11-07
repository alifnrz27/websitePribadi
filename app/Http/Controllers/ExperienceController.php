<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ExperienceController extends Controller
{
    public function index(){
        $data['experiences'] = Experience::where(['is_active'=> 1])->latest()->get();
        return view('experience.index', $data);
    }

    public function create()
    {
        return view('experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|file|max:1024',
        ]);

        $experienceImage = $request->file('image')->store('experience');

        $slug = Str::slug($request->title);
        $firstSlug = $slug;
        $checkSlug = Experience::where(['slug' => $slug])->first();

        $value = 1;
        while($checkSlug){
            $slug = $firstSlug.'-'.$value;
            $checkSlug = Experience::where(['slug' => $slug])->first();
            $value += 1;
        }

        Experience::create([
            'user_id' => auth()->user()->id,
            'slug' => $slug,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $experienceImage,
        ]);

        return redirect('/dashboard')->with('status', 'Berhasil menambah pengalaman baru');
    }

    public function show(Experience $experience)
    {
        if($experience->is_active == 0){
            return abort(404);
        }
        $data['experience']= $experience;
        $data['user'] = User::where(['id'=> $experience->user_id])->first();
        return view('experience.show', $data);
    }

    public function edit(Experience $experience)
    {
        return view('experience.edit', $experience);
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        if(auth()->user()->id != $experience->user_id){
            return abort(403);
        }

        if($request->file('image')){
            // delete gambar lama
            Storage::delete($experience->image);
            $experienceImage = $request->file('image')->store('experience');
            $updateData['image'] = $experienceImage;
        }

        $updateData['title'] = $request->title;
        $updateData['content'] = $request->content;

        $experience->update($updateData);

        return redirect('/dashboard')->with('status', 'Berhasil update pengalaman');
    }

    public function destroy(Experience $experience)
    {
        if(auth()->user()->id != $experience->user_id){
            return abort(403);
        }
        Storage::delete($experience->image);

        $experience->delete();
        return back()->with('status', 'Berhasil menghapus pengalaman');
    }

    public function uploadImage(Request $request)
    {
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'-'.time().'.'.$extension;

            $request->file('upload')->move(public_path('assets/images/experience'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/assets/images/experience/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset-utf-8');
            echo $response;
        }
    }
}
