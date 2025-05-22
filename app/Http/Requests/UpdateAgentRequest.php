<?php

namespace App\Http\Requests;

use App\Models\Agent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAgentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('agent_edit');
    }

    public function rules()
    {
        return [
            'agency_name' => [
                'string',
                'nullable',
            ],
            'tier' => [
                'string',
                'nullable',
            ],
            'license_number' => [
                'string',
                'nullable',
            ],
            'kyc_status' => [
                'string',
                'nullable',
            ],
        ];
    }
}
