<?php

namespace App\Http\Requests;

use App\Models\CommissionSetting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCommissionSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('commission_setting_create');
    }

    public function rules()
    {
        return [
            'comission_commited' => [
                'string',
                'nullable',
            ],
        ];
    }
}
