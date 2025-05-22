<?php

namespace App\Http\Requests;

use App\Models\CommissionFromUniversity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCommissionFromUniversityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('commission_from_university_edit');
    }

    public function rules()
    {
        return [];
    }
}
