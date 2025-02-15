<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Category;
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
    public function dashboard(){
        $user_id = auth()->user()->id;
        $orders = Order::orderBy('id', 'desc')->where('user_id', $user_id)->take(5)->get();
        $products = Product::orderBy('id', 'desc')->take(5)->get();
        $allorders = Order::where('user_id', $user_id)->count(); 
        $processingorders = Order::where('user_id', $user_id)->where('status','processing')->count();
        $allpayments = Payment::where('user_id', $user_id)->count(); 
        $processingpayments = Payment::where('user_id', $user_id)->where('status','processing')->count();

        $categories = Category::all();
        return view('admin.dashboard',compact('products','categories','orders','allorders',
    'processingorders', 'allpayments','processingpayments'));
    }
}
