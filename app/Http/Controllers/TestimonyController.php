<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testmony;

class TestimonyController extends Controller
{
    
    public function index()
    {

        $testimonies = Testmony::all();
        if(auth()->user()->role == 'admin'){
            return view('pages.dashboard.testimonies', compact('testimonies'));
        }else{
            $testimonies = Testmony::where('user_id', auth()->user()->id)->get();
            return view('pages.dashboard.testimonies', compact('testimonies'));
        }
    }

    public function addTestimony()
    {

        return view('pages.dashboard.requestTestimony');
    }

    public function storeTestimony(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
             'testimony' => 'required:max:200',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'user_id' => 'required|unique:testmonies',
    
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $validatedData['image'] = $imageName;

        $testimony = Testmony::create([
            'name' => $validatedData['name'],
            'testimony' => $validatedData['testimony'],
            'image' => $validatedData['image'],
            'user_id' => $validatedData['user_id'],
        ]
        );

        if($testimony){
            return redirect()->route('testimony');
           }else{
               return redirect()->back()->with('status', 'something went wrong');
           }

        }
   
     


    



}
