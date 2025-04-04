<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Rules\PhoneNumber;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{


    public function showLogin(){
        return view('admin.login');
    }
    public function logout(){
        //process logout
        Auth::logout();
        return redirect('/adminlogin');
    }
    public function showSignup(){
        return view('admin.signup');
    }
    public function showProfile(){
        $user= User::find(auth()->user()->id);
        return view('admin.profile', compact('user'));
    }



    public function doSignup(Request $request){
        
        
        $credentials = $request->validate([
            'websitename'=>'required|string|max:255',
            'name'=>'required|string|max:255',
            'phone'=>['required','min:10','string','max:255', new PhoneNumber],
            'email'=>'required|email|unique:users|max:255',
            //'password'=>'required|string|max:255|min:8|confirmed',
            'password' => ['required','string','max:255','min:8','confirmed',Password::min(8)->letters()->numbers()],
        ]);
        // return "hello";
        //return 'test';
        $incomingFields['name']=strip_tags($credentials['name']);
        $incomingFields['phone']=strip_tags($credentials['phone']);
        $incomingFields['websitename']=strip_tags($credentials['websitename']);
        $incomingFields['websitevisits']=0;
        $incomingFields['email']=strip_tags($credentials['email']);
        $incomingFields['password']=strip_tags($credentials['password']);

        $user = $request->attributes->get('user', null); // Default to null if not set

        if ($user === null) {
            // Handle the case where the user is not set
            return response()->json(['error' => 'User not found'], 404);
        }

        //return "hello";

        // return $incomingFields;
        try{

        $user = User::create($incomingFields);

        // Log the user in
        Auth::login($user);

        // Redirect the user to a dashboard or home page
        return redirect('admindashboard')->with('success', 'User created successfully. You are now logged in.');

        } catch (\Exception $e) {
            // return back()->withInput()->with('error', 'An error occurred while creating the user. Please try again.');
            return redirect()->back()->withErrors([
                'specifyinputmaybe' => 'An error occurred while creating the user. Please try again.'
                //$e->getMessage()
            ]);
        }
}

public function doLogin(Request $request){
        
    $credentials = $request->validate([
        'email'=>'required|email|max:255',
        'password' => 'required|max:255|min:8|string',
    ]);
    //return 'test';
    
    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();
        return redirect()->intended('admindashboard');

    }
    // else if(User::inOrganization()->count()==0){
    //   return back()->withErrors([
    //     'email' => 'No account detected. Initiate first admin signup',
    //     ])->onlyInput('email');
    // }
    else{
      return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    

    

}



}