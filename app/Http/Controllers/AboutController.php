<?php

namespace App\Http\Controllers;

use App\About;
use App\Feature_Product;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts=About::all();
        $feature_products=Feature_Product::all();
        return view('about')->with(compact('abouts','feature_products'));
    }
}
