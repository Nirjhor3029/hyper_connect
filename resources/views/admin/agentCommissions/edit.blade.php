@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.agentCommission.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.agent-commissions.update", [$agentCommission->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="agent_id">{{ trans('cruds.agentCommission.fields.agent') }}</label>
                <select class="form-control select2 {{ $errors->has('agent') ? 'is-invalid' : '' }}" name="agent_id" id="agent_id">
                    @foreach($agents as $id => $entry)
                        <option value="{{ $id }}" {{ (old('agent_id') ? old('agent_id') : $agentCommission->agent->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('agent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.agent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="application_id">{{ trans('cruds.agentCommission.fields.application') }}</label>
                <select class="form-control select2 {{ $errors->has('application') ? 'is-invalid' : '' }}" name="application_id" id="application_id">
                    @foreach($applications as $id => $entry)
                        <option value="{{ $id }}" {{ (old('application_id') ? old('application_id') : $agentCommission->application->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('application'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.application_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="source_type">{{ trans('cruds.agentCommission.fields.source_type') }}</label>
                <input class="form-control {{ $errors->has('source_type') ? 'is-invalid' : '' }}" type="text" name="source_type" id="source_type" value="{{ old('source_type', $agentCommission->source_type) }}">
                @if($errors->has('source_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.source_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commission_type">{{ trans('cruds.agentCommission.fields.commission_type') }}</label>
                <input class="form-control {{ $errors->has('commission_type') ? 'is-invalid' : '' }}" type="text" name="commission_type" id="commission_type" value="{{ old('commission_type', $agentCommission->commission_type) }}">
                @if($errors->has('commission_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commission_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.commission_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="base_amount">{{ trans('cruds.agentCommission.fields.base_amount') }}</label>
                <input class="form-control {{ $errors->has('base_amount') ? 'is-invalid' : '' }}" type="number" name="base_amount" id="base_amount" value="{{ old('base_amount', $agentCommission->base_amount) }}" step="0.01">
                @if($errors->has('base_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('base_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.base_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="percentage">{{ trans('cruds.agentCommission.fields.percentage') }}</label>
                <input class="form-control {{ $errors->has('percentage') ? 'is-invalid' : '' }}" type="number" name="percentage" id="percentage" value="{{ old('percentage', $agentCommission->percentage) }}" step="0.01">
                @if($errors->has('percentage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('percentage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.percentage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="final_amount">{{ trans('cruds.agentCommission.fields.final_amount') }}</label>
                <input class="form-control {{ $errors->has('final_amount') ? 'is-invalid' : '' }}" type="number" name="final_amount" id="final_amount" value="{{ old('final_amount', $agentCommission->final_amount) }}" step="0.01">
                @if($errors->has('final_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('final_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.final_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="currency">{{ trans('cruds.agentCommission.fields.currency') }}</label>
                <input class="form-control {{ $errors->has('currency') ? 'is-invalid' : '' }}" type="text" name="currency" id="currency" value="{{ old('currency', $agentCommission->currency) }}">
                @if($errors->has('currency'))
                    <div class="invalid-feedback">
                        {{ $errors->first('currency') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payout_method">{{ trans('cruds.agentCommission.fields.payout_method') }}</label>
                <input class="form-control {{ $errors->has('payout_method') ? 'is-invalid' : '' }}" type="text" name="payout_method" id="payout_method" value="{{ old('payout_method', $agentCommission->payout_method) }}">
                @if($errors->has('payout_method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payout_method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.payout_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status">{{ trans('cruds.agentCommission.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', $agentCommission->status) }}">
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agentCommission.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection