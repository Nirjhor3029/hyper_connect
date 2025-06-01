<?php

namespace App\Http\Requests;

use App\Models\AdmissionStage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAdmissionStageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('admission_stage_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:admission_stages,id',
        ];
    }
}
