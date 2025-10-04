<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class ProgramPageController extends Controller
{
    public function index()
    {
        $universities = University::all();
        // return $universities[0]->universityCourses;
        return view('home.programs', compact('universities'));
    }
}
