<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(10);
        return view('menu',
            ['products'=>$product]);
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        // dd($product);
        return view(
            'menu_detail',compact('product')

        );

    }
}
