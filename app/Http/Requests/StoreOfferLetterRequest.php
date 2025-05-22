<?php

namespace App\Http\Requests;

use App\Models\OfferLetter;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOfferLetterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('offer_letter_create');
    }

    public function rules()
    {
        return [
            'file_url' => [
                'string',
                'nullable',
            ],
            'issue_date' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'delivery_status' => [
                'string',
                'nullable',
            ],
        ];
    }
}
