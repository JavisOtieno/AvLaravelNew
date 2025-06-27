<?php

namespace App\Http\Controllers\api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //

        public function index(){

        $userid = auth()->user()->id;

        $orders = Order::with('customer')->where('user_id', $userid)
        ->orderBy('created_at', 'desc')->get();

        return response()->json(['orders'=>$orders]);     
    }

        public function showOrder($id){
        $order = Order::with('customer')->find($id);
        return response()->json(['order'=>$order]);
    }



    
}
