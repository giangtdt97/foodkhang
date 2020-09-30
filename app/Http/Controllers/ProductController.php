<?php

namespace App\Http\Controllers;

use App\Category;
use App\Feature_Image;
use App\Parent_Service;
use App\Product;
use App\Service;
use App\Ultility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $services=Service::all();
        $ultilities=Ultility::all();
        return view('menu')->with(compact('categories','services','ultilities'));
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $mightAlsoLike = Product::where('slug','!=',$slug)->mightAlsoLike()->get();
        return view(
            'menu_detail',compact('product','mightAlsoLike')
        );
    }
    public function showService($slug){
        $service= Service::where('slug', $slug)->first();
        return view(
            'service_detail',compact('service')
        );
    }
    public function showCategory($slug){
        $category= Category::where('slug', $slug)->first();
        $feature_images=Feature_Image::all();
        return view(
            'category_detail',compact('category','feature_images')
        );
    }


}
