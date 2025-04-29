<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    //
    public function showForgotPasswordForm()
    {
       return view('auth.forgotPassword');
    }
    // public function showForgotPasswordSellerForm()
    // {
    //    return view('auth.forgotPasswordSeller');
    // }
    public function showSuccessForgotPassword()
    {
       return view('auth.successForgotPassword');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgotPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);

        Mail::send('email.forgotPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have emailed your password reset link!');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token) { 
       return view('auth.forgotPasswordLink', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            //'password' => 'required|string|min:6|confirmed',
            'password' => ['required','string','max:255','min:8','confirmed',Password::min(8)->letters()->numbers()],
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
                            ->where([
                              'email' => $request->email, 
                              'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            //return "we get here";
            //return back()->withInput()->with('error', 'Invalid token!');
            return back()->withErrors(['token' => 'Invalid token!'])->onlyInput('email');

            
        }
        //return "we get here";

        $user = User::where('email', $request->email);
        $user->update(['password' => Hash::make($request->password)]);
        $useraccount = $user->first();

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        if($useraccount->usertype=='seller'){
            return redirect('/successpasswordreset')->with('message', 'Your password has been changed!');
        }else{
            return redirect('/login')->with('message', 'Your password has been changed!');
        }

    }
    
}
