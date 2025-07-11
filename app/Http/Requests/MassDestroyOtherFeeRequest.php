<?php

namespace App\Http\Requests;

use App\Models\OtherFee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOtherFeeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('other_fee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:other_fees,id',
        ];
    }
}
