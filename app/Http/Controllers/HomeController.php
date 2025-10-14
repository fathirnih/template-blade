<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }
}
