<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;

class OrderController extends Controller
{
    //
    public function index(){
        // $orders = Order::all();
        $user_id = auth()->user->id;
        $orders = Order::where('user_id', $user_id)->get();
        return view('admin.orders',compact('orders'));
    }

    public function trackOrder(){
        // $orders = Order::all();
        $user = User::find(1);
        return view('trackyourorder',compact('user'));
    }
}
