<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {


        $search =  $request->input('search');
        if($search!=""){
            $orders = Order::where(function ($query) use ($search){
                $query->where('phone_number', '=', $search);

            })
                ->paginate(2);
            $orders->appends(['search' => $search]);
        }
        else{
            return view('reservation');
        }
        return View('reservation')->with('data',$orders);
        //
    }

}
