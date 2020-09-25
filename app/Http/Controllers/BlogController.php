<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Feature_Image;
use App\Tag;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs =Blog::orderBy('created_at','desc')->published()->paginate(3);
        $categories=Category::all();
        $tags=Tag::all();
        $feature_images=Feature_Image::all();
        return view('blogs.index')->with(compact('blogs','categories','tags','feature_images'));
    }
    public function show(Request $request,$slug)
    {
        $blogs =Blog::published()->paginate(3);
        $blog= Blog::where('slug', $slug)->first();
        $categories=Category::all();
        $tags=Tag::all();
        $feature_images=Feature_Image::all();
        return view(
            'blogs.blog_single',compact('blog','categories','tags','blogs','feature_images')
        );
    }
    public function showTag($slug){
        $blogs =Blog::published()->paginate(3);
        $tag= Tag::where('slug', $slug)->first();
        $categories=Category::all();
        return view(
            'tag_detail',compact('tag','categories','blogs')
        );
    }
}
