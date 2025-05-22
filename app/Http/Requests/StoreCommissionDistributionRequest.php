<?php

namespace App\Http\Requests;

use App\Models\CommissionDistribution;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCommissionDistributionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('commission_distribution_create');
    }

    public function rules()
    {
        return [];
    }
}
