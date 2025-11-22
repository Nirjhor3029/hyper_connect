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

    // Recruiters Pages:Start
    public function recruitersCourseSearch()
    {
        return view('front.recruiters.course-search');
    }

    public function recruitersApplicationManagement()
    {
        return view('front.recruiters.application-management');
    }

    public function recruitersStudentManagement()
    {
        return view('front.recruiters.student-management');
    }

    public function recruitersSupportTraining()
    {
        return view('front.recruiters.support-training');
    }

    public function recruitersSecurity()
    {
        return view('front.recruiters.security');
    }
    // Recruiters Pages:End



    public function searchCourse()
    {
        return view('front.search-course');
    }

    public function institutionDirectory()
    {
        return view('front.institution-directory');
    }

    public function recruiterSuccessStories()
    {
        return view('front.recruiter-success-stories');
    }
    public function recruitersPricingNew()
    {
        return view('front.pricing-recruiters-new');
    }
}
