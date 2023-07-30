<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    
    public function index()
    {
        //check role
        if(auth()->user()->role == 'admin'){
            // link service with user

            // $services = Service::all();

            // each service with user based on user_id
            $services = Service::with('user')->get();
            // dd($services);


            return view('pages.dashboard.services', compact('services'));
        }else{
        $services = Service::where('user_id', auth()->user()->id)->get();
        return view('pages.dashboard.services', compact('services'));
        }
    }


    public function requestService()
    {

        return view('pages.dashboard.requestService');
    }

    public function storeService(Request $request)
    {
        $validatedData = $request->validate([
             'service' => 'required:max:200',
             'description' => 'required:max:255',
             'file' => 'required|mimes:pdf|max:2048',
          

        ]);

        $imageName = time().$request->file->getFilename().'.'.$request->file->extension();
        
        $request->file->move(public_path('document'), $imageName);

        $validatedData['file'] = $imageName;

        $service = Service::create([
            'description' => $validatedData['description'],
            'service_type' => $validatedData['service'],
            'document' => $validatedData['file'],
            'user_id' => auth()->user()->id,
            'status' => 'pending',
        ]

        );

        if($service){
            return redirect()->route('services');
           }else{
               return redirect()->back()->with('status', 'something went wrong');
           }

        }

        // accept service
        public function acceptService($id)
        {
            $service = Service::find($id);
            $service->status = 'accepted';
            $service->save();
          // redirect to services page
            return redirect()->route('services');
     
        }

        // reject service

        public function rejectService($id)
        {
            $service = Service::find($id);
            $service->status = 'rejected';
            $service->save();
          // redirect to services page
            return redirect()->route('services');
     
        }


}
