<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs =Blog::published()->paginate(5);
        return view('blogs.index')->with(compact('blogs'));
    }
    public function show($slug)
    {
        $blog= Blog::where('slug', $slug)->first();
        return view(
            'blogs.blog_single',compact('blog')
        );
    }
    public function showTag($slug){
        $tag= Tag::where('slug', $slug)->first();
        return view(
            'tag_detail',compact('tag')
        );
    }
}
