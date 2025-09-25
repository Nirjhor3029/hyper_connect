<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationFormPageController extends Controller
{
    public function index()
    {
        return view('home.application_form');
    }
}
