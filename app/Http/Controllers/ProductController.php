<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //admin functions
    public function index(){
        $products = Product::orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        return view('index',compact('products','categories'));
    }
    public function dashboardtest(){
        $orders = Order::orderBy('id', 'desc')->take(5)->get();
        $products = Product::orderBy('id', 'desc')->take(5)->get();
        $categories = Category::all();
        return view('admin.dashboard',compact('products','categories','orders'));
    }
    public function showUserProducts(){
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products',compact('products','categories'));
    }



}
