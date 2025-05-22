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
            'nationality' => [
                'string',
                'nullable',
            ],
            'dob' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'passport_no' => [
                'string',
                'nullable',
            ],
            'visa_status' => [
                'string',
                'nullable',
            ],
            'course_interesteds.*' => [
                'integer',
            ],
            'course_interesteds' => [
                'array',
            ],
            'current_status' => [
                'string',
                'nullable',
            ],
            'payment_status' => [
                'string',
                'nullable',
            ],
            'academic_attachments.*' => [
                'integer',
            ],
            'academic_attachments' => [
                'array',
            ],
            'val_status' => [
                'string',
                'nullable',
            ],
            'emgs_status' => [
                'string',
                'nullable',
            ],
            'enrollement_status' => [
                'string',
                'nullable',
            ],
            'attachments' => [
                'array',
            ],
        ];
    }
}
