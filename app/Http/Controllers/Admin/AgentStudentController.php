<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentStudentController extends Controller
{

    public function newStudents()
    {
        // return "students/new";
        return view('admin.students.new-students');
    }
    public function prospectedStudents()
    {
        return view('admin.students.new-students');
    }
}
