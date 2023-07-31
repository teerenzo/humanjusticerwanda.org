<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use \App\Mail\ServiceMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


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
            //send email
              //link to be sent to the user
              $link= $request->url();
            
              // remove /register from the link
              $link = str_replace('/services/request', '/admin/login', $link);
             
              $details = [
                  'title' => 'Request for service notification',
                  'body' => auth()->user()->name.' has requested for a service. Please login to your account to accept or reject the request',
                  'link' => $link
              ];

              $admin=User::where('role','user')->first();

             Mail::to($admin->email)->send(new ServiceMail($details));
            
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

                        //send email
              //link to be sent to the user
            $link= route('login');

            
            $user=User::find($service->user_id);

            $details = [
                  'title' => 'Hello '.$user->name,
                  'body' => 'Your service has been accepted. we will contact you soon',
                  'link' => $link
              ];


            Mail::to($user->email)->send(new ServiceMail($details));


          // redirect to services page
            return redirect()->route('services');
     
        }

        // reject service
       // two parameter

        public function rejectService($id)
        {
            // substring the id to get the reason
            $id = explode(',', $id);
            $service = Service::find($id[0]);
            $service->status = 'rejected';
            $service->save();

                         //send email
              //link to be sent to the user
              $link= route('login');

            
              $user=User::find($service->user_id);
  
              $details = [
                    'title' => 'Hello '.$user->name,
                    'body' => 'Your service has been reject for the following reason: '.$id[1].'. Please contact us for more information',
                    'link' => $link
                ];
  
  
              Mail::to($user->email)->send(new ServiceMail($details));
          // redirect to services page
            return redirect()->route('services');
     
        }


}
