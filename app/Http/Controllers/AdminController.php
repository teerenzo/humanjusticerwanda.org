<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.login');

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        $credentials = $request->only('email', 'password');

    



        if (auth()->attempt($credentials)) {

                // chech if status equal admin
                if(auth()->user()->status == 'admin'){
                    return redirect()->route('admin.dashboard');
                }else{

            return redirect()->route('/');
                    
        } } 
        else {
            return redirect()->back()->with('status', 'Invalid login details');
        }
    }

    
}
