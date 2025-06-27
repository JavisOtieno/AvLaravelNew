<?php

namespace App\Http\Controllers\api;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function dashboard(){
        $user_id = auth()->user()->id;
        $orders = Order::with('customer')->orderBy('id', 'desc')->where('user_id', $user_id)->take(5)->get();
        $products = Product::orderBy('id', 'desc')->take(5)->get();
        $allorders = Order::where('user_id', $user_id)->count(); 
        $processingorders = Order::where('user_id', $user_id)->where('status','processing')->count();
        $allpayments = Payment::where('user_id', $user_id)->count(); 
        $processingpayments = Payment::where('user_id', $user_id)->where('status','processing')->count();

        $categories = Category::all();
        return response()->json(compact('products','categories','orders','allorders',
        'processingorders', 'allpayments','processingpayments'));
    }
}
