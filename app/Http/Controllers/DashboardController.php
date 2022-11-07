<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['blogs'] = Blog::where(['user_id' => auth()->user()->id])->latest()->get();
        $data['projects'] = Project::where(['user_id' => auth()->user()->id])->latest()->get();
        $data['messages'] = Contact::latest()->get();
        $data['comments'] = Comment::latest()->get();
        return view('dashboard', $data);
    }
}
