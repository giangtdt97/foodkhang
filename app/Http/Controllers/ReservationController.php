<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('reservation', compact('orders'));
    }
    public function search()
    {
        return view('reservation');
    }
    public function searchFullText(Request $request)
    {
        dd($request->search);
        if ($request->search != '') {
            $data = Order::search('phone_number')->get();
            foreach ($data as $key => $value) {
                echo $value->name;
                echo '<br>';
            }
        }
    }
}
