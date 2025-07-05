<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Country;
use App\Models\Course;
use App\Models\Document;
use App\Models\EducationLevel;
use App\Models\Nationality;
use App\Models\Otp;
use App\Models\Program;
use App\Models\Student;
use App\Models\Subject;
use App\Models\University;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentAuthController extends Controller
{
    public function showLoginForm() {
        return view('student.auth.login');
    }
    public function dashboard() {
        return view('student.dashboard');
    }

    public function login(Request $request) {
        $credentials = $request->only('phone', 'password');

        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->route('student.dashboard');
        }

        return back()->withErrors(['phone' => 'Invalid credentials']);
    }
    public function logout(Request $request)
    {
        Auth::guard('student')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('student.login')->with('message', 'You have been logged out.');
    }

    public function profile()
    {
        $user = Student::where('id', Auth::guard('student')->user()->id)->first();

        $countries = Country::pluck('name', 'id');


        return view('student.profile.index', compact('user','countries'));
    }
    public function dataShow()
    {
        $student = Student::where('id', Auth::guard('student')->user()->id)->first();

        $student->load('user', 'nationality', 'lead_agent', 'handelling_agent','confirm_country','confirm_university','confirm_program' ,'confirm_subject', 'interested_countries', 'univertsities', 'subjects', 'programs', 'course_interesteds', 'academic_attachments', 'studentApplications', 'studentCommissionDistributions');

        return view('student.profile.data_show', compact('student'));


    }
    public function dataEdit()
    {


        $users = \App\Models\User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nationalities = Nationality::pluck('nationality_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lead_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $handelling_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $interested_countries = Country::pluck('name', 'id');

        $univertsities = University::pluck('name', 'id');

        $subjects = Subject::pluck('subject_name', 'id');

        $programs = Program::pluck('type', 'id');

        $course_interesteds = Course::pluck('name', 'id');

        $academic_attachments = Document::pluck('file_url', 'id');
        $max_education_levels = EducationLevel::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $student = Student::where('id', Auth::guard('student')->user()->id)->first();
        $student->load('user', 'nationality', 'lead_agent', 'handelling_agent', 'interested_countries', 'univertsities', 'subjects', 'programs', 'course_interesteds', 'academic_attachments');

        return view('student.profile.data_edit', compact('academic_attachments', 'course_interesteds', 'handelling_agents', 'interested_countries', 'lead_agents', 'nationalities', 'programs', 'student', 'subjects', 'univertsities', 'users','max_education_levels'));



    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|string|max:20',
            'country_id' => 'nullable|numeric',
        ]);

        $student = Auth::guard('student')->user();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->country_id = $request->country_id;

        $student->save();

        return response()->json(['status' => 'success', 'message' => 'Profile updated successfully']);
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $student = Auth::guard('student')->user();

        if (!Hash::check($request->current_password, $student->password)) {
            return response()->json(['status' => 'error', 'message' => 'Current password is incorrect']);
        }

        $student->password = Hash::make($request->new_password);
        $student->save();

        return response()->json(['status' => 'success', 'message' => 'Password updated successfully']);
    }


    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:2048', // max 2MB
        ]);

        $student = Auth::guard('student')->user();

        // remove previous photo
        $student->clearMediaCollection('photo');

        // upload new photo
        $media = $student->addMediaFromRequest('photo')->toMediaCollection('photo');

        return response()->json([
            'status' => 'success',
            'url' => $media->getUrl(),
        ]);
    }





    public function showRegisterForm() {

        $countries = Country::pluck('name', 'id');
        $prefixes = Country::pluck('mobile_no_prefix', 'id');
        return view('student.auth.new',compact('countries','prefixes'));
    }

    public function register(Request $request) {
        $request->validate([
            'phone' => 'required|unique:students',
            'otp' => 'required',
            'password' => 'required|confirmed',
            'name' => 'required',
            'country_id' => 'required',
            'address' => 'required'
        ]);

        $otpRecord = Otp::where('phone', $request->phone)->where('otp', $request->otp)->first();

        if (!$otpRecord) {
            return back()->withErrors(['otp' => 'Invalid OTP'])->withInput();

        }

        $student = Student::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'country_id' => $request->country_id,
            'address' => $request->address,
        ]);

        $otpRecord->update(['verified' => true]);

        Auth::guard('student')->login($student);

        return redirect()->route('student.dashboard');
    }

    public function send(Request $request)
    {
        $request->validate(['phone' => 'required']);

        $exist = Student::where('phone', $request->phone) ->first();
        if ($exist) {
            return response()->json(['status' => 'error', 'message' => "This Phone Number Already Have an Account Please Login"]); // return OTP for testing only


        }

        $otp = rand(1000, 9999);

        Otp::updateOrCreate(
            ['phone' => $request->phone],
            ['otp' => $otp, 'verified' => false]
        );

        // Ideally integrate WhatsApp API here
        // Example: WhatsAppService::send($request->phone, "Your OTP is $otp");

        return response()->json(['status' => 'success', 'otp' => $otp]); // return OTP for testing only
    }

    public function verify(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'otp' => 'required'
        ]);

        $otp = Otp::where('phone', $request->phone)
            ->where('otp', $request->otp)
            ->first();

        if ($otp) {
            $otp->update(['verified' => true]);
            return response()->json(['status' => 'verified']);
        } else {
            return response()->json(['status' => 'invalid']);
        }
    }


}
