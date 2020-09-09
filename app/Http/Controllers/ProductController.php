<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {

        $products=Product::inStock()->get();
        $categories=Category::all();
        $services=Service::all();
        return view('menu')->with(compact('products','categories','services'));
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view(
            'menu_detail',compact('product')
        );
    }
    public function showCategory($slug){
        $category= Category::where('slug', $slug)->first();
        return view(
            'menu_detail',compact('category')
        );
    }
    public function showService($slug){
        $service= Service::where('slug', $slug)->first();
        return view(
            'service_detail',compact('service')
        );
    }

}
