<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $data['categories'] = Category::get();
        return view('category.index', $data);
    }

    public function create()
    {
        return view('category.create');
    }

    public function show(Category $category)
    {
        if($category->is_active == 0){
            return abort(404);
        }
        $data['blogs']= Blog::where(['category_id' => $category->id, 'is_active' => 1])->with('user')->get();
        return view('category.show', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $slug = Str::slug($request->category);
        $firstSlug = $slug;
        $checkSlug = Category::where(['slug' => $slug])->first();

        $value = 1;
        while($checkSlug){
            $slug = $firstSlug.'-'.$value;
            $checkSlug = Category::where(['slug' => $slug])->first();
            $value += 1;
        }

        Category::create([
            'slug' => $slug,
            'category' => $request->category,
        ]);

        return redirect('/dashboard')->with('status', 'Berhasil menambah kategori baru');
    }

    public function edit(Category $category)
    {
        return view('category.edit', $category);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $updateData['category'] = $request->category;

        $category->update($updateData);

        return redirect('/dashboard')->with('status', 'Berhasil update kategori');
    }

    public function destroy(Category $category)
    {
        $checkData = Blog::where(['category_id' => $category->id])->get();
        if(count($checkData) > 0){
            return back()->with('status', 'Masih ada postingan yang memiliki kategori '.$category->category);
        }
        $category->delete();
        return back()->with('status', 'Berhasil menghapus kategori');
    }
}
