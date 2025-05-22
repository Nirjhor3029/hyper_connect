<?php

namespace App\Http\Requests;

use App\Models\StatusLog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStatusLogRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('status_log_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:status_logs,id',
        ];
    }
}
