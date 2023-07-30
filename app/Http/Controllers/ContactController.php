<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    
    public function index()
    {
        return view('pages.contact');
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'email' => 'required:email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new contact();
        $contact->subject = $request->subject;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    public function manageContact()
    {
        $contacts = contact::all();
        return view('pages.dashboard.comments', compact('contacts'));
    }


}
