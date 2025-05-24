<?php

namespace App\Http\Requests;

use App\Models\UniversityPartnership;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUniversityPartnershipRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('university_partnership_create');
    }

    public function rules()
    {
        return [
            'university_id' => [
                'required',
                'integer',
            ],
            'partner_name' => [
                'string',
                'required',
            ],
            'agreement_url' => [
                'string',
                'required',
            ],
            'active_from' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'active_to' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'agreement_file' => [
                'array',
            ],
        ];
    }
}
