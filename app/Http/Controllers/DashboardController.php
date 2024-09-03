<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $user = User::find(1);
        return view('dashboard',compact('user'));
    }
}
