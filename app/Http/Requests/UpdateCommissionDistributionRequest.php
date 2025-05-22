<?php

namespace App\Http\Requests;

use App\Models\CommissionDistribution;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCommissionDistributionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('commission_distribution_edit');
    }

    public function rules()
    {
        return [];
    }
}
