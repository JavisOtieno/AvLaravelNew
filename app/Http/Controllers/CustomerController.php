<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        
        $customers = Customer::orderBy('created_at', 'desc')->get();
        return view('admin.customers',compact('customers','orders'));
    }
}
