<?php

namespace App\Http\Requests;

use App\Models\StatusLog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStatusLogRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_log_create');
    }

    public function rules()
    {
        return [
            'related_type' => [
                'string',
                'nullable',
            ],
            'related' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
