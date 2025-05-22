<?php

namespace App\Http\Requests;

use App\Models\Document;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDocumentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('document_create');
    }

    public function rules()
    {
        return [
            'file_url' => [
                'string',
                'nullable',
            ],
            'status' => [
                'string',
                'nullable',
            ],
            'expiry_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'translation_status' => [
                'string',
                'nullable',
            ],
            'verified_at' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
