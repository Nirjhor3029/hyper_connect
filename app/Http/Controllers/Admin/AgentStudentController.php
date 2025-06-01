<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmissionStage;
use App\Models\Agent;
use App\Models\Country;
use App\Models\Nationality;
use App\Models\Program;
use App\Models\Student;
use App\Models\Subject;
use App\Models\University;
use Illuminate\Http\Request;

class AgentStudentController extends Controller
{

    public function newStudents(Request $request)
    {
        $query = Student::with(['user', 'nationality', 'lead_agent', 'handelling_agent', 'interested_countries', 'univertsities', 'subjects', 'programs', 'course_interesteds', 'academic_attachments', 'media']);

        if ($request->filled('keyword')) {
            $keyword = $request->keyword;
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%$keyword%")
                    ->orWhere('email', 'like', "%$keyword%")
                    ->orWhere('phone', 'like', "%$keyword%");
            });
        }

        if ($request->filled('agent_id')) {
            $query->where(function ($q) use ($request) {
                $q->where('lead_agent_id', $request->agent_id)
                    ->orWhere('handelling_agent_id', $request->agent_id);
            });
        }

        if ($request->filled('nationality_id')) {
            $query->where('nationality_id', $request->nationality_id);
        }

        if ($request->filled('subject_id')) {
            $query->whereHas('subjects', fn($q) => $q->where('subjects.id', $request->subject_id));
        }

        if ($request->filled('university_id')) {
            $query->whereHas('univertsities', fn($q) => $q->where('universities.id', $request->university_id));
        }

        if ($request->filled('program_id')) {
            $query->whereHas('programs', fn($q) => $q->where('programs.id', $request->program_id));
        }

        $students = $query->get();

        // Dropdown options
        $agents = Agent::pluck('name', 'id');
        $nationalities = Nationality::pluck('nationality_en', 'id');
        $subjects = Subject::pluck('subject_name', 'id');
        $universities = University::pluck('name', 'id');
        $programs = Program::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');

        return view('admin.students.new-students', compact('students', 'agents', 'nationalities', 'subjects', 'universities', 'programs', 'countries'));
    }
    public function prospectedStudents(Request $request)
    {
        $query = Student::with(['user', 'nationality', 'lead_agent', 'handelling_agent', 'interested_countries', 'univertsities', 'subjects', 'programs', 'course_interesteds', 'academic_attachments', 'media']);

        if ($request->filled('keyword')) {
            $keyword = $request->keyword;
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%$keyword%")
                    ->orWhere('email', 'like', "%$keyword%")
                    ->orWhere('phone', 'like', "%$keyword%");
            });
        }

        if ($request->filled('agent_id')) {
            $query->where(function ($q) use ($request) {
                $q->where('lead_agent_id', $request->agent_id)
                    ->orWhere('handelling_agent_id', $request->agent_id);
            });
        }

        if ($request->filled('nationality_id')) {
            $query->where('nationality_id', $request->nationality_id);
        }

        if ($request->filled('subject_id')) {
            $query->whereHas('subjects', fn($q) => $q->where('subjects.id', $request->subject_id));
        }

        if ($request->filled('university_id')) {
            $query->whereHas('univertsities', fn($q) => $q->where('universities.id', $request->university_id));
        }

        if ($request->filled('program_id')) {
            $query->whereHas('programs', fn($q) => $q->where('programs.id', $request->program_id));
        }

        $students = $query->get();

        // Dropdown options
        $agents = Agent::pluck('name', 'id');
        $nationalities = Nationality::pluck('nationality_en', 'id');
        $subjects = Subject::pluck('subject_name', 'id');
        $universities = University::pluck('name', 'id');
        $programs = Program::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');

        $admission_stage = AdmissionStage::orderBy('sequence', 'asc')
            ->get();

        return view('admin.students.abroad_agent_students_list', compact(
            'students',
            'agents',
            'nationalities',
            'subjects',
            'universities',
            'programs',
            'countries',
            'admission_stage'
        ));
    }



    // Ajax Call: // Route: students/convert-to-prospective
    public function convertToProspective(Request $request)
    {
        $studentId = $request->input('selectedStudentId');
        $student = Student::find($studentId);

        if (!$student) {
            return response()->json([
                'status' => 404,
                'error' => 'Student not found'
            ], 404);
        }

        // Update the student status to 'prospective'
        $student->admission_stage  = 'lead_generation';
        $student->admission_status  = 'prospective';
        $student->save();

        return response()->json([
            'status' => 200,
            'message' => 'Student converted to prospective successfully'
        ]);
    }
}
