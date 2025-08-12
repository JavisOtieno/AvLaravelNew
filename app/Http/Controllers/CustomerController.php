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
        return view('admin.customers',compact('customers'));
    }

    public function viewCustomer($id){
        $customer = Customer::find($id);
        if(!$customer){
            return redirect()->back()->with('error', 'Customer not found');
        }
        return view('admin.viewcustomer',compact('customer'));
    }
    
}
