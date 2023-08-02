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
             'user_id' => 'required',
    
        ]);

        //check if user_id arleady exist

        $testimony = Testmony::where('user_id', $validatedData['user_id'])->first();
        if($testimony && auth()->user()->role != 'admin'){
            return redirect()->back()->with('status', 'You have already submitted a testimony');
        }

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
            return redirect()->route('testimonies');
           }else{
               return redirect()->back()->with('status', 'something went wrong');
           }

        }

        public function editTestimony($id)
        {
            $testimony = Testmony::find($id);

            return view('pages.dashboard.editTestmony', compact('testimony'));
        }


        public function updateTestimony(Request $request, $id)
        {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                 'testimony' => 'required:max:200',
                 'user_id' => 'required',
                 
        
            ]);
    
            // $imageName = time().'.'.$request->image->extension();
            // $request->image->move(public_path('images'), $imageName);
    
            // $validatedData['image'] = $imageName;
    
            $testimony = Testmony::where('id', $id)->update([
                'name' => $validatedData['name'],
                'testimony' => $validatedData['testimony'],
                'user_id' => $validatedData['user_id'],
            ]
            );
    
            if($testimony){
                return redirect()->route('testimonies');
               }else{
                   return redirect()->back()->with('status', 'something went wrong');
               }
    
            }

            public function deleteTestimony($id)
            {
                $testimony = Testmony::find($id);
                $testimony->delete();
                return redirect()->back()->with('status', 'Testimony deleted successfully');
            }


            // show it to homepage by changing status

            public function active($id)
            {
                $testimony = Testmony::where('id', $id)->update([
                    'status' => 'active',
                ]
                );
        
                if($testimony){
                    return redirect()->route('testimonies');
                   }else{
                       return redirect()->back()->with('status', 'something went wrong');
                   }
        
                }

                public function inactive($id)
                {
                    $testimony = Testmony::where('id', $id)->update([
                        'status' => 'inactive',
                    ]
                    );
            
                    if($testimony){
                        return redirect()->route('testimonies');
                       }else{
                           return redirect()->back()->with('status', 'something went wrong');
                       }
            }

   


}
