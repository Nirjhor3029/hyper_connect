<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('front.home');
    }


    public function recruitersCourseSearch()
    {
        return view('front.recruiters.course-search');
    }

    public function searchCourse()
    {
        return view('front.search-course');
    }
}
