<?php

namespace App\Http\Controllers\api;

use App\Models\Trip;
use App\Models\User;
use App\Models\Order;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function index(){

        $userid = auth()->user()->id;

        $user = User::where('id', $userid)->orderBy('created_at', 'desc')->first();
        $orderscount = Order::where('user_id', $userid) -> count();
        // $locationscount = Location::where('user_id', $userid) -> count();
        $ordersamount = Order::where('user_id', $userid)->sum('value');

        return response()->json(compact('user','orderscount','ordersamount'));
        
    }


    
}
