<?php

namespace App\Http\Requests;

use App\Models\AdmissionStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAdmissionStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('admission_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:admission_statuses,id',
        ];
    }
}
