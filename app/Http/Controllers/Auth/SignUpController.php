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

    // forgot password

    public function forgotPasswordView()
    {
        return view('pages.reset-password');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $user = User::where('email', $request->email)->first();
        if($user){
            // generate token
            $token = $user->createToken('auth_token')->plainTextToken;
            $user->token = $token;
            $user->save();


            //link to be sent to the user
            $link= $request->url().'/reset-password/'.$token;

            // remove /forgot-password from the link
            $link = str_replace('/forgot-password', '', $link);

            $details = [
                'title' => 'Mail from Human Justice Organisation',
                'body' => 'Please click the link below to reset your password',
                'link' => $link
            ];

            Mail::to($user->email)->send(new \App\Mail\SignUpMail($details));

            return redirect()->back()->with('status', 'Reset password link has been sent to your email');

        }else{
            return redirect()->back()->with('status', 'User with provided email is not exist in our system');
        }

    }

    // reset password

    public function resetPasswordView($token)
    {
        return view('pages.resetPassword');
    }

    public function resetPassword($token)
    {
        $user = User::where('token', $token)->first();
        if($user){
            return view('pages.reset-password', ['token' => $token]);
        }else{
            return redirect()->route('login')->with('status', 'Invalid token');
        }
    }

    // update password

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|max:8',
            'cpassword' => 'required|same:password',
        ]);

        $user = User::where('token', $request->token)->first();
        if($user){
            $user->password = bcrypt($request->password);
            $user->token = null;
            $user->save();
            return redirect()->route('login')->with('status', 'Your password has been updated successfully');
        }else{
            return redirect()->route('login')->with('status', 'Invalid token');
        }
    }


    


    
}
