<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products=Product::featured()->orderBy('created_at')->get();
        $blogs=Blog::featured()->orderBy('created_at')->get();
        $categories=Category::all();
        return view('home')->with(compact('products','blogs','categories'));
    }

}
