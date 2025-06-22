<?php

namespace App\Http\Requests;

use App\Models\OtherFee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOtherFeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('other_fee_edit');
    }

    public function rules()
    {
        return [
            'country_id' => [
                'required',
                'integer',
            ],
            'service_fee' => [
                'required',
            ],
            'admission_fee' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'visa_fee' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'emgs_fee' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'registration_fee' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'resource_fee' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'caution_fee' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
