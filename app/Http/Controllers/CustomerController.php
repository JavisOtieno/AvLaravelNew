<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        $user_id = auth()->user()->id;
        $customers = Customer::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        return view('admin.customers',compact('customers','orders'));
    }
}
