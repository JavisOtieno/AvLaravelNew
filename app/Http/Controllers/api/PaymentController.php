<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

        public function index(){
        
            // $payments = Payment::all();
            $user_id = auth()->user()->id;
            $payments = Payment::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
            // $allpayments = Payment::where('user_id', $user_id)->count(); 
            // $completepayments = Payment::where('user_id', $user_id)->where('status','complete')->count();
            // $processingpayments = Payment::where('user_id', $user_id)->where('status','processing')->count();
            // $cancelledpayments = Payment::where('user_id', $user_id)->where('status','cancelled')->count();
            return response()->json(compact('payments'
            // , 'allpayments','completepayments','processingpayments','cancelledpayments'
        ));
        }
}
