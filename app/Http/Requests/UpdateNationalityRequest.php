<?php

namespace App\Http\Requests;

use App\Models\Nationality;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNationalityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('nationality_edit');
    }

    public function rules()
    {
        return [
            'num_code' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'alpha_2_code' => [
                'string',
                'nullable',
            ],
            'alpha_3_code' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'nationality_en' => [
                'string',
                'nullable',
            ],
            'nationality_bn' => [
                'string',
                'nullable',
            ],
        ];
    }
}
