<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
  
    public function index()
    {
           $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }


    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        Blog::create($request->all());
        return redirect()->route('blog.index')->with('success', 'Blog berhasil ditambahkan');
    }
 
    public function edit(string $id)
    {
         $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

 
    public function update(Request $request, string $id)
    {
          $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect()->route('blog.index')->with('success', 'Blog berhasil diperbarui');
    }


    public function destroy(string $id)
    {
           $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog berhasil dihapus');
    }
    
}
