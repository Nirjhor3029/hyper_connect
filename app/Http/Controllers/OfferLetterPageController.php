<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferLetterPageController extends Controller
{
    public function index()
    {
        $authUser = auth()->user();
        return view('home.offer_letters', compact('authUser'));
    }
}
