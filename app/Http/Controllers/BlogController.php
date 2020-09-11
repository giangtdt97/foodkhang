<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class BlogController extends Controller
{
    public function index()
    {
        $blogs =Blog::published()->paginate(5);
        $categories=Category::all();
        $tags=Tag::all();
        return view('blogs.index')->with(compact('blogs','categories','tags'));
    }
    public function show($slug)
    {
        $blog= Blog::where('slug', $slug)->first();
        $categories=Category::all();
        $tags=Tag::all();

        return view(
            'blogs.blog_single',compact('blog','categories','tags')
        );
    }
    public function showTag($slug){
        $blogs =Blog::published()->paginate(5);
        $tag= Tag::where('slug', $slug)->first();
        $categories=Category::all();
        return view(
            'tag_detail',compact('tag','categories','blogs')
        );
    }
}
