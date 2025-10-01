<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class ApplicationFormPageController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('home.application_form', compact('countries'));
    }

    public function submit(Request $request)
    {
        // Handle form submission logic here
        return $request->all();
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
