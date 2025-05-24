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
            'country_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'string',
                'required',
            ],
            'code' => [
                'string',
                'nullable',
            ],
            'university_type' => [
                'string',
                'nullable',
            ],
            'address' => [
                'required',
            ],
            'accreditation' => [
                'string',
                'nullable',
            ],
            'website' => [
                'string',
                'required',
            ],
            'contact_email' => [
                'required',
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
