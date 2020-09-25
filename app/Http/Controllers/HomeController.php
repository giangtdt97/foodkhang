<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Feature_Image;
use App\Feature_Service;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products=Product::featured()->orderBy('created_at')->get();
        $blogs=Blog::featured()->orderBy('created_at','desc')->get();
        $categories=Category::all();
        $feature_images=Feature_Image::all();
        $feature_service=Feature_Service::all();
        return view('home')->with(compact('products','blogs','categories','feature_images','feature_service'));
    }

}
