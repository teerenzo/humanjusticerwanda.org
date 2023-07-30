<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
