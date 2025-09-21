<?php

namespace App\Http\Requests;

use App\Models\Inquiry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInquiryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inquiry_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'email' => [
                'required',
            ],
            'contact_number' => [
                'string',
                'nullable',
            ],
            'nationality' => [
                'string',
                'nullable',
            ],
            'dob' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
