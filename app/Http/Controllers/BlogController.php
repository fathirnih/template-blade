<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  
    public function index()
    {
           $blogs = Blog::all();
        return view('admin.dashboard', compact('blogs'));
    }


    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        Blog::create($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Blog berhasil ditambahkan');
    }
 
    public function edit(string $id)
    {
         $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

 
    public function update(Request $request, string $id)
{
    $blog = Blog::findOrFail($id);

    // Jika ingin upload gambar baru
    if($request->hasFile('image')){
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $imageName);
        $blog->image = $imageName;
    }

    $blog->title = $request->title;
    $blog->author = $request->author;
    $blog->date = $request->date;
    $blog->content = $request->content;

    $blog->save();

    return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil diperbarui');
}


    public function destroy(string $id)
    {
           $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Blog berhasil dihapus');
    }
    
}
