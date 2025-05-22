<?php

namespace App\Http\Requests;

use App\Models\CommissionFromUniversity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCommissionFromUniversityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('commission_from_university_create');
    }

    public function rules()
    {
        return [];
    }
}
