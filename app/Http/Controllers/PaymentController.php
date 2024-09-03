<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function showUserPayments(){
        $products = Product::all();
        $categories = Category::all();
        return view('admin.payments',compact('products','categories'));
    }
}
