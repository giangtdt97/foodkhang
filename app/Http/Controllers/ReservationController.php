<?php

namespace App\Http\Controllers;

use App\Feature_Service;
use App\Order;
use App\Product;
use App\Service;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $products=Product::all();
        $services=Service::all();
        $feature_service=Feature_Service::all();
        $search =  $request->input('search');
        if($search!=""){
            $orders = Order::published()->where(function ($query) use ($search){
                $query->where('phone_number', '=', $search);

            })
                ->paginate(2);
            $orders->appends(['search' => $search]);
        }
        else{
            return view('reservation')->with(compact('feature_service','services','products'));
        }
        return View('reservation',compact('feature_service','services','products'))->with('data',$orders);
        //
    }

}
