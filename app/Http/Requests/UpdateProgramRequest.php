<?php

namespace App\Http\Requests;

use App\Models\Program;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProgramRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('program_edit');
    }

    public function rules()
    {
        return [
            'type' => [
                'required',
            ],
            'country_id' => [
                'required',
            ],
        ];
    }
}
