<?php

namespace App\Http\Requests;

use App\Models\AgentCommission;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAgentCommissionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('agent_commission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:agent_commissions,id',
        ];
    }
}
