<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    $blogs = Blog::published()->paginate(5);
    return view('blogs.index',
              ['blogs'=>$blogs]);
    }
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
       // dd($blog);
        return view(
            'blogs.blog_single',
            ['blog' => $blog]
        );
    }
}
