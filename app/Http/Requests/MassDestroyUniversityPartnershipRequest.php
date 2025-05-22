<?php

namespace App\Http\Requests;

use App\Models\UniversityPartnership;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyUniversityPartnershipRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('university_partnership_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:university_partnerships,id',
        ];
    }
}
