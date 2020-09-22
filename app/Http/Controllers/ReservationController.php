<?php

namespace App\Http\Controllers;

use App\Feature_Service;
use App\Order;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {

        $feature_service=Feature_Service::all();
        $search =  $request->input('search');
        if($search!=""){
            $orders = Order::where(function ($query) use ($search){
                $query->where('phone_number', '=', $search);

            })
                ->paginate(2);
            $orders->appends(['search' => $search]);
        }
        else{
            return view('reservation')->with(compact('feature_service'));
        }
        return View('reservation',compact('feature_service'))->with('data',$orders);
        //
    }

}
