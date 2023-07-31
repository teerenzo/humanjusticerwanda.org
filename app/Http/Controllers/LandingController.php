<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testmony;

class LandingController extends Controller
{
    public function index()
    {
        // get all testimonies with status active
        $testimonies = Testmony::where('status', 'active')->get();
        return view('landing', compact('testimonies'));
    }

    public function about()
    {
        return view('pages.landing.about');
    }

    public function services()
    {
        return view('pages.landing.services');
    }

    public function contact()
    {
        return view('pages.landing.contact');
    }
}
