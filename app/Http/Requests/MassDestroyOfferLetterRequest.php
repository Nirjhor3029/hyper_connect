<?php

namespace App\Http\Requests;

use App\Models\OfferLetter;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOfferLetterRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('offer_letter_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:offer_letters,id',
        ];
    }
}
