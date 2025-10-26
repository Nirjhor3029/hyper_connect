<?php

namespace App\Http\Controllers;

use App\Models\OnlineApplication;
use App\Models\University;
use Illuminate\Http\Request;

class OnlineApplicationPageController extends Controller
{
    public function index()
    {
        $universities = University::pluck('name', 'id');
        // return $universities;
        return view('home.online-application.index', compact('universities'));
    }


    public function store(Request $request)
    {
        // ✅ Validation
        $validated = $request->validate([
            'applicantType' => 'required|string',
            'email' => 'required|email',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'passportNumber' => 'required|string',
            'date_of_birth' => 'required|date',
            'phone' => 'required|string',
            'campus' => 'required',
            'graduation_date' => 'nullable|date',
            'photo' => 'required|image|max:5120', // max 5MB
            'passport_copy' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'academic_results.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120',
        ]);

        // ✅ File Uploads
        $photoPath = $request->file('photo')?->store('uploads/applications/photos', 'public');
        $passportPath = $request->file('passport_copy')?->store('uploads/applications/passports', 'public');
        $engPath = $request->file('english_transcript')?->store('uploads/applications/english', 'public');

        $academicPaths = [];
        if ($request->hasFile('academic_results')) {
            foreach ($request->file('academic_results') as $file) {
                $academicPaths[] = $file->store('uploads/applications/results', 'public');
            }
        }

        // ✅ Save to DB
        $application = OnlineApplication::create([
            'applicantType' => $request->applicantType,
            'email' => $request->email,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'passportNumber' => $request->passportNumber,
            'studentIdNumber' => $request->studentIdNumber,
            'gender' => $request->gender,
            'marital' => $request->marital,
            'religion' => $request->religion,
            'date_of_birth' => $request->date_of_birth,
            'phone' => $request->phone,
            'father_phone' => $request->father_phone,
            'address' => $request->address,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
            'highest_qualification' => $request->highest_qualification,
            'graduation_date' => $request->graduation_date,
            'awarding_institution' => $request->awarding_institution,
            'work_experience' => $request->work_experience,
            'campus' => $request->campus,
            'intake' => $request->intake,
            'study_type' => $request->study_type,
            'sponsorships' => $request->sponsorships,
            'external_scholarships' => $request->external_scholarships,
            'photo' => $photoPath,
            'passport_copy' => $passportPath,
            'english_transcript' => $engPath,
            'academic_results' => $academicPaths,
        ]);

        return response()->json([
            'message' => 'Application submitted successfully!',
            'data' => $application
        ], 201);
    }
}
