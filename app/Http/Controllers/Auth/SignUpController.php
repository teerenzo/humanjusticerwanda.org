<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// bcrypt
use Illuminate\Support\Facades\Hash;
// mail
use Illuminate\Support\Facades\Mail;

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

         // generate token
            $token = $user->createToken('auth_token')->plainTextToken;
            $user->token = $token;
            $user->save();


            //link to be sent to the user
            $link= $request->url().'/verify-email/'.$token;
            
            // remove /register from the link
            $link = str_replace('/register', '', $link);
           
            $details = [
                'title' => 'Mail from Human Justice Organisation',
                'body' => 'Your account has been created successfully. Please click the link below to verify your email',
                'link' => $link
            ];

            Mail::to($user->email)->send(new \App\Mail\SignUpMail($details));

         if($user){
                return redirect()->route('login')->with('status', 'Your account has been created successfully. Please check your email to verify your account');
            }else{
                return redirect()->back()->with('status', 'something went wrong');
            }
    }

    // email verification

    public function verifyEmail($token)
    {
        $user = User::where('token', $token)->first();
        if($user){

            $user->update(['token' => null]);
            $user->email_verified_at = now();
            $user->is_active = 1;
            $user->save();
            return redirect()->route('login')->with('status', 'Your email has been verified');
        }else{
            return redirect()->route('login')->with('status', 'Invalid token');
        }
    }
    


    
}
