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
        
            // $payments = Payment::all();
            $user_id = auth()->user()->id;
            $payments = Payment::where('user_id', $user_id)->get();
            $allpayments = Payment::where('user_id', $user_id)->count(); 
            $completepayments = Payment::where('user_id', $user_id)->where('status','complete')->count();
            $processingpayments = Payment::where('user_id', $user_id)->where('status','processing')->count();
            $cancelledpayments = Payment::where('user_id', $user_id)->where('status','cancelled')->count();
            return view('admin.payments',compact('payments', 'allpayments','completepayments','processingpayments','cancelledpayments'));
        }
    
}
