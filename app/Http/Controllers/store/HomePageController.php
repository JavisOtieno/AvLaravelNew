<?php

namespace App\Http\Controllers\store;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    //
    public function index(){
    // $user = User::find(1);
    // request()->get('user');
    return view('index');
    }
    public function shop(){
        // $websiteName = $request->get('websiteName');
        // $user = User::find(1);
        // $products = Product::all();

        // ,'websiteName'
    return view('shop');
    }

    //store functions
    public function showProduct(){
        $user = User::find(1);
        return view('product',compact('user'));
    }

        //
        public function showCustomerAccount(){
            $user = User::find(1);
            return view('account',compact('user'));
        }

        
}
