<?php

namespace App\Http\Requests;

use App\Models\UniversityPartnership;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUniversityPartnershipRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('university_partnership_edit');
    }

    public function rules()
    {
        return [
            'partner_name' => [
                'string',
                'nullable',
            ],
            'partner_type' => [
                'string',
                'nullable',
            ],
            'agreement_url' => [
                'string',
                'nullable',
            ],
            'active_from' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'active_to' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
