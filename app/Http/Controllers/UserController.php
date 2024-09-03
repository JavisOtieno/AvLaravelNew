<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showCustomerAccount(){
        $user = User::find(1);
        return view('account',compact('user'));
    }
    public function showUserCustomers(){
        $user = User::find(1);
        $users = User::all();
        return view('admin.customers',compact('user','users'));
    }
    public function showLogin(){
        return view('admin.login');
    }
    public function logout(){
        //process logout
        return redirect('/adminlogin');
    }
    public function showSignup(){
        return view('admin.signup');
    }
    public function showProfile(){
        return view('admin.profile');
    }
}

