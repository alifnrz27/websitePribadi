<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Project;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type, $slug)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);

        if($type == 1){
            $post = Blog::where(['slug'=> $slug])->first();
        }elseif($type == 2){
            $post = Project::where(['slug'=> $slug])->first();
        }else{
            return abort(403);
        }

        Comment::create([
            'post_id'=>$post->id,
            'type'=>$type,
            'name'=>$request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        return back()->with('status', 'Berhasil menambahkan comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($commentID)
    {
        Comment::where(['id' => $commentID])->delete();
        return back()->with('status', 'Berhasil menghapus komentar');
    }
}
