<?php

namespace App\Http\Requests;

use App\Models\AdmissionStage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAdmissionStageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('admission_stage_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
            'sequence' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
