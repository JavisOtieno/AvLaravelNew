<?php

namespace App\Http\Controllers\api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //

    
        public function index(){

        $userid = auth()->user()->id;

        $products = Product::orderBy('created_at', 'desc')->take(20);

        return response()->json(['products'=>$products]); 

        }
}
