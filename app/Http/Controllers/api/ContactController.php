<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
        public function showContact(){
        if(auth()->user()->top_user_id){
            $user= User::find(auth()->user()->top_user_id);
        }else{
            $user= User::find(4449);
        }
        return response()->json(compact('user'));
    }

}
