<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function showUserPayments(){
        $payments = Payment::all();
        return view('admin.payments',compact('payments'));
    }
    
}
