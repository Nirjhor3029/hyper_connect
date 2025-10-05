<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Course;
use App\Models\EducationLevel;
use App\Models\Student;
use App\Models\StudentEducationLevel;
use App\Models\Subject;
use App\Models\Test;
use App\Models\Upload;
use Illuminate\Http\Request;

class ApplicationFormPageController extends Controller
{
    public function index()
    {
        $authUser = auth()->user();

        $countries = Country::all();
        $selected_country = null;
        if (isset($authUser->country_id)) {
            $selected_country = Country::find($authUser->country_id);
        }

        $education_levels = EducationLevel::all();
        // return $education_levels;

        // $student_highest_education_level = $authUser->educationLevel[0];
        // $test = $authUser->tests[0];

        $student_highest_education_level = $authUser->educationLevel->first() ?? null;
        $test = $authUser->tests->first() ?? null;

        // return $test;
        // return $student_highest_education_level;

        $uploads = $authUser->uploads;

        // return $uploads;

        return view('home.application_form', compact(
            'countries',
            'selected_country',
            'authUser',
            'education_levels',
            'student_highest_education_level',
            'test',
            'uploads'
        ));
    }

    public function submit(Request $request)
    {
        // Handle form submission logic here
        // return $request->all();

        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'alt_phone' => 'nullable|string|max:255',
            'passport_no' => 'nullable|string|max:255',
            'nationality' => 'required|string|max:255',
            // 'country_id' => 'required|exists:countries,id',
            // 'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            // 'country' => 'required|string|max:255',
            'zipcode' => 'required|string|max:255',

            // 'marital_status' => 'required|string|max:255',
            // 'gender' => 'required|string|max:255',
        ]);

        // return $data;

        $authStudent = Student::where('id', auth()->user()->id)->first();

        // return $authStudent;

        $authStudent->name = '';
        if (isset($data['first_name'])) {
            $authStudent->name .= $data['first_name'];
        }
        if (isset($data['middle_name'])) {
            $authStudent->name .= ' ' . $data['middle_name'];
        }
        if (isset($data['last_name'])) {
            $authStudent->name .= ' ' . $data['last_name'];
        }

        $authStudent->first_name = $data['first_name'];
        $authStudent->middle_name = $data['middle_name'];
        $authStudent->last_name = $data['last_name'];
        $authStudent->dob = $data['dob'];
        // return  [$data['dob'], $authStudent->dob];
        // $authStudent->email = $data['email'];
        $authStudent->phone = $data['phone'];
        $authStudent->alt_phone = $data['alt_phone'] ?? null;
        $authStudent->passport_no = $data['passport_no'];
        $authStudent->nationality = $data['nationality'];

        $authStudent->marital_status = $request->marital_status ?? null;
        $authStudent->gender = $request->gender ?? null;

        $authStudent->city = $data['city'];
        $authStudent->state = $data['state'];
        // $authStudent->country = $data['country'];
        $authStudent->zipcode = $data['zipcode'];
        $authStudent->save();
        // $authStudent->update($data);
        // $authUser = auth()->user();
        // $authUser->update($data);

        if (isset($request->country_id)) {
            $authStudent->country_id = $request->country_id;
            $authStudent->save();
        }
        // return $request->all();

        // set student highest education level
        $studentEducationLevel = StudentEducationLevel::where('student_id', $authStudent->id)->first();
        if (!isset($studentEducationLevel)) {
            $studentEducationLevel = new StudentEducationLevel();
            $studentEducationLevel->student_id = $authStudent->id;
        }
        $studentEducationLevel->education_level_id = $request->highest_degree;
        $studentEducationLevel->program = $request->program;
        $studentEducationLevel->grade = $request->grade;
        $studentEducationLevel->save();

        $test = Test::where('student_id', $authStudent->id)->first();
        if (!isset($test)) {
            $test = new Test();
            $test->student_id = $authStudent->id;
        }
        $test->exam_type = $request->exam_type;
        $test->exam_date = $request->exam_date;
        $test->overall_score = $request->overall_score;
        $test->listening_score = $request->listening_score;
        $test->reading_score = $request->reading_score;
        $test->writing_score = $request->writing_score;
        $test->speaking_score = $request->speaking_score;
        $test->save();


        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function getDialCode($country_id)
    {
        $country = Country::find($country_id);
        if ($country) {
            return response()->json(['dial_code' => $country->dial_code]);
        } else {
            return response()->json(['error' => 'Country not found'], 404);
        }
    }

    public function updateFileName(Request $request, $id)
    {
        $upload = Upload::find($id);
        if ($upload->student_id != auth()->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        $upload->file_custom_name = $request->file_name;
        $upload->save();
        return redirect()->back()->with('success', 'File name updated successfully!');
        // return response()->json(['message' => 'File name updated successfully']);
    }


    public function applyProgram(Request $request)
    {
        $programID = $request->program_id;
        if (!$programID) {
            return response()->json([
                'states' => 400,
                'message' => 'Program id is required'
            ]);
        }


        $course = Course::where('id', $programID)->get();

        
        $student = Student::where('id', auth()->user()->id)->first();

        // return response()->json([
        //     'states' => 200,
        //     'course' => $course
        // ]);

        try {
            // $student->course_interesteds()->sync($course);
            $student->course_interesteds()->syncWithoutDetaching($course);
        } catch (\Throwable $th) {
            return response()->json([
                'states' => 400,
                'message' => $th->getMessage()
            ]);
        }

        return response()->json([
            'states' => 200,
            'course' => $course
        ]);
    }
}
