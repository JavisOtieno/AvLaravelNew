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
    $user = User::find(1);
    return view('index',compact('user'));
    }
    public function shop(Request $request){
        // $websiteName = $request->get('websiteName');
        $user = User::find(1);
        $products = Product::all();

        // ,'websiteName'
        return view('shop',compact('user','products'));
        }
}
