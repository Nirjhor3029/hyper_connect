<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_edit');
    }

    public function rules()
    {
        return [
            'university_id' => [
                'required',
                'integer',
            ],
            'program_id' => [
                'required',
                'integer',
            ],
            'course_mode' => [
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'duration' => [
                'string',
                'required',
            ],
            'total_fees' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'no_of_semester' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'url' => [
                'string',
                'nullable',
            ],
            'scholarship' => [
                'string',
                'nullable',
            ],
            'commission' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
