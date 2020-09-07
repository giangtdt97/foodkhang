<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {

        $products=Product::all();
        $categories=Category::all();
        return view('menu')->with(compact('products','categories'));
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view(
            'menu_detail',compact('product')
        );
    }

}
