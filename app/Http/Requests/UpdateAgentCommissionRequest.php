<?php

namespace App\Http\Requests;

use App\Models\AgentCommission;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAgentCommissionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('agent_commission_edit');
    }

    public function rules()
    {
        return [
            'source_type' => [
                'string',
                'nullable',
            ],
            'commission_type' => [
                'string',
                'nullable',
            ],
            'percentage' => [
                'numeric',
            ],
            'currency' => [
                'string',
                'nullable',
            ],
            'payout_method' => [
                'string',
                'nullable',
            ],
            'status' => [
                'string',
                'nullable',
            ],
        ];
    }
}
