<?php

namespace App\Http\Requests;

use App\Models\Program;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProgramRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('program_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'short_code' => [
                'string',
                'nullable',
            ],
            'field_of_study' => [
                'string',
                'nullable',
            ],
            'education_type' => [
                'string',
                'nullable',
            ],
            'level' => [
                'string',
                'nullable',
            ],
            'duration_months' => [
                'string',
                'nullable',
            ],
            'credit_hours' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'teaching_language' => [
                'string',
                'nullable',
            ],
            'tags.*' => [
                'integer',
            ],
            'tags' => [
                'array',
            ],
        ];
    }
}
