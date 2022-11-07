<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data['projects'] = Project::latest()->limit(6)->get();
    $data['blogs'] = Blog::latest()->limit(6)->get();
    $data['experiences'] = Experience::get();
    return view('welcome', $data);
});

Route::resource('/contact', ContactController::class)->except(['index', 'create', 'show', 'update', 'edit']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/blog', BlogController::class)->except(['index', 'show']);
    Route::post('/blog/upload-image', [BlogController::class, 'uploadImage'])->name(name:'ckeditor.uploadBlogImage');

    Route::resource('/project', ProjectController::class)->except(['index', 'show']);
    Route::post('/project/upload-image', [ProjectController::class, 'uploadImage'])->name(name:'ckeditor.uploadProjectImage');

    Route::resource('/experience', ExperienceController::class)->except(['index', 'show']);
    Route::post('/experience/upload-image', [ExperienceController::class, 'uploadImage'])->name(name:'ckeditor.uploadExperienceImage');

    Route::resource('/category', CategoryController::class)->except(['index', 'show']);

    Route::resource('/contact', ContactController::class)->except(['index', 'show', 'store']);
});

Route::get('/blog',[BlogController::class, 'index']);
Route::get('/blog/{blog}',[BlogController::class, 'show']);

Route::get('/project',[ProjectController::class, 'index']);
Route::get('/project/{project}',[ProjectController::class, 'show']);

Route::get('/experience',[ExperienceController::class, 'index']);
Route::get('/experience/{experience}',[ExperienceController::class, 'show']);

Route::get('/category',[CategoryController::class, 'index']);
Route::get('/category/{category}',[CategoryController::class, 'show']);

Route::post('/comment/{type}/{slug}', [CommentController::class, 'store']);
Route::delete('/comment/{id}', [CommentController::class, 'destroy']);