<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;

class DocumentController extends Controller
{

    public function index()
    {
        $documents = Documents::all();
        return view('pages.dashboard.manageDocument', compact('documents'));
    }

    public function addDocument()
    {
        return view('pages.dashboard.addDocument');
    }

    public function storeDocument(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tel' => 'required|min:10|max:10',
            'id' => 'required|min:16|max:16',
            'description' => 'required',
            'document' => 'required|mimes:pdf,doc,docx|max:2048',

        ]);

        $document = $request->file('document');
        $documentName = time() . '.' . $document->extension();
        $document->move(public_path('documents'), $documentName);

        $document = new Documents();
        $document->owner = $request->name;
        $document->owner_phone = $request->tel;
        $document->owner_id = $request->id;
        $document->document_description = $request->description;
        $document->document_name = $documentName;
        $document->save();

        return redirect()->back()->with('success', 'Document uploaded successfully.');
    }

    public function downloadDocument($document)
    {
        return response()->download(public_path('documents/' . $document));
    }

    public function deleteDocument($id)
    {
        $document = Documents::find($id);
        //delete the document from the folder
        unlink(public_path('documents/' . $document->document_name));
        //delete the document from the database
        $document->delete();


        return redirect()->back()->with('success', 'Document deleted successfully.');
    }
    
}
