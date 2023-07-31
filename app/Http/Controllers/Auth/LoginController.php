<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
   
    public function index()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        // check if is active
        $user = User::where('email', $request->email)->first();
        if($user){
        if($user->is_active == 0){
            return redirect()->back()->with('status', 'Your account is not active. Please check your email to activate your account');
        }
       }else{
        return redirect()->back()->with('status', 'User with provided email is not exist in our system');
       }
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('landing');
        } else {
            return redirect()->back()->with('status', 'Invalid login details');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    
}
