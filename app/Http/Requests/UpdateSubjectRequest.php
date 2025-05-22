<?php

namespace App\Http\Requests;

use App\Models\Subject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSubjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('subject_edit');
    }

    public function rules()
    {
        return [
            'subject_name' => [
                'string',
                'nullable',
            ],
            'subject_details' => [
                'string',
                'nullable',
            ],
            'duration' => [
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
