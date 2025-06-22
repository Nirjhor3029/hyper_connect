<?php

namespace App\Http\Requests;

use App\Models\Student;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStudentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('student_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'nationality_id' => [
                'required',
                'integer',
            ],
            'dob' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'passport_no' => [
                'string',
                'nullable',
            ],
            'val_status' => [
                'string',
                'nullable',
            ],
            'emgs_status' => [
                'string',
                'nullable',
            ],
            'visa_status' => [
                'string',
                'nullable',
            ],
            'payment_status' => [
                'string',
                'nullable',
            ],
            'current_status' => [
                'string',
                'nullable',
            ],
            'enrollement_status' => [
                'string',
                'nullable',
            ],
            'interested_countries.*' => [
                'integer',
            ],
            'interested_countries' => [
                'array',
            ],
            'univertsities.*' => [
                'integer',
            ],
            'univertsities' => [
                'array',
            ],
            'subjects.*' => [
                'integer',
            ],
            'subjects' => [
                'array',
            ],
            'course_interesteds.*' => [
                'integer',
            ],
            'course_interesteds' => [
                'array',
            ],
            'academic_attachments.*' => [
                'integer',
            ],
            'academic_attachments' => [
                'array',
            ],
            'academic_certificates' => [
                'array',
            ],
            'attachments' => [
                'array',
            ],
            'medical_certificates' => [
                'array',
            ],
            'max_education_level_id' => [
                'required',
                'integer',
            ],
            'offer_letter_attachments' => [
                'array',
            ],
        ];
    }
}
