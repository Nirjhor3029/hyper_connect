<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Program;
use App\Models\University;
use Illuminate\Http\Request;

class ProgramPageController extends Controller
{
    public function index()
    {
        $universities = University::all();
        // return $universities[0]->universityCourses;
        $countries = Country::all();
        $programs = Program::all();
        return view('home.programs.index', compact('universities', 'countries', 'programs'));
    }

    public function filter(Request $request)
    {
        $query = University::with(['universityCourses']);

        // Apply filters dynamically
        if ($request->country_id) {
            $query->where('country_id', $request->country_id);
        }

        if ($request->university_id) {
            $query->where('id', $request->university_id);
        }

        if ($request->program_type) {
            $query->whereHas('universityCourses', function ($q) use ($request) {
                $q->where('type', $request->program_type);
            });
        }

        $universities = $query->get();

        // Return only the partial HTML for course list
        return view('home.programs.course_list', compact('universities'))->render();
    }
}
