<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

        public function index(){

        $userid = auth()->user()->id;

        $orders = Order::with('customer')->where('user_id', $userid)
        ->orderBy('created_at', 'desc')->get();

        return response()->json(['orders'=>$orders]);     
    }

    
}
