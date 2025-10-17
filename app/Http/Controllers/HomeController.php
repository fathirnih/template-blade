<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class HomeController extends Controller
{
     public function index()
    {
        return view('blog.index');
    }

    public function article()
    {
        $blogs = Blog::all();
        return view('blog.article', compact('blogs'));
    }

    public function about()
    {
        return view('blog.about');
    }
    public function contact()
{
    return view('blog.contact');
}
}