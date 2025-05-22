<?php

namespace App\Http\Requests;

use App\Models\University;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUniversityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('university_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'code' => [
                'string',
                'nullable',
            ],
            'university_type' => [
                'string',
                'nullable',
            ],
            'accreditation' => [
                'string',
                'nullable',
            ],
            'website' => [
                'string',
                'nullable',
            ],
            'contact_phone' => [
                'string',
                'nullable',
            ],
            'logo_url' => [
                'string',
                'nullable',
            ],
        ];
    }
}
