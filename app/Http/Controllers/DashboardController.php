<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    // public function index(){
    //     // $user = User::find(1);
    //     $orders = Order::orderBy('id', 'desc')->take(5)->get();
    //     $products = Product::orderBy('id', 'desc')->take(5)->get();
    //     return view('dashboard',compact('orders','products'));
    // }
}
