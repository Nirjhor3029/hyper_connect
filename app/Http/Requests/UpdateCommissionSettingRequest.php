<?php

namespace App\Http\Requests;

use App\Models\CommissionSetting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCommissionSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('commission_setting_edit');
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
