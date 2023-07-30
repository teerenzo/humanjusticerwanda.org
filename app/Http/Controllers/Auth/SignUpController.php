<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// bcrypt
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }
   //register
    public function register(Request $request)
    {
      


         $validatedData = $request->validate([
             'name' => 'required|max:255',
              'email' => 'email|required|unique:users',
              'password' => 'required|min:6|max:8',
              'cpassword' => 'required|same:password',
         ]);
    
         $validatedData['password'] = bcrypt($request->password);

    
         $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => $validatedData['password'],
                'role' => 'user'
            ]
         );

         if($user){
             return redirect()->route('login');
            }else{
                return redirect()->back()->with('status', 'something went wrong');
            }
    
    

    }


    
}
