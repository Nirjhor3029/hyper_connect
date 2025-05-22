<?php

namespace App\Http\Requests;

use App\Models\CommissionFromUniversity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCommissionFromUniversityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('commission_from_university_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:commission_from_universities,id',
        ];
    }
}
