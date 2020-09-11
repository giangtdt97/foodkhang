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

}
