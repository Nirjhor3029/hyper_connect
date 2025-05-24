@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.agent.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.agents.update", [$agent->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.agent.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $agent->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.agent.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $agent->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.agent.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $agent->phone) }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_id">{{ trans('cruds.agent.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $agent->country->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.agent.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address', $agent->address) }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.agent.fields.kyc_status') }}</label>
                @foreach(App\Models\Agent::KYC_STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('kyc_status') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="kyc_status_{{ $key }}" name="kyc_status" value="{{ $key }}" {{ old('kyc_status', $agent->kyc_status) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="kyc_status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('kyc_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kyc_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.kyc_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="agency_name">{{ trans('cruds.agent.fields.agency_name') }}</label>
                <input class="form-control {{ $errors->has('agency_name') ? 'is-invalid' : '' }}" type="text" name="agency_name" id="agency_name" value="{{ old('agency_name', $agent->agency_name) }}">
                @if($errors->has('agency_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agency_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.agency_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="parent_agent_id">{{ trans('cruds.agent.fields.parent_agent') }}</label>
                <select class="form-control select2 {{ $errors->has('parent_agent') ? 'is-invalid' : '' }}" name="parent_agent_id" id="parent_agent_id">
                    @foreach($parent_agents as $id => $entry)
                        <option value="{{ $id }}" {{ (old('parent_agent_id') ? old('parent_agent_id') : $agent->parent_agent->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('parent_agent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('parent_agent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.parent_agent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tier">{{ trans('cruds.agent.fields.tier') }}</label>
                <input class="form-control {{ $errors->has('tier') ? 'is-invalid' : '' }}" type="text" name="tier" id="tier" value="{{ old('tier', $agent->tier) }}">
                @if($errors->has('tier'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tier') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.tier_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="license_number">{{ trans('cruds.agent.fields.license_number') }}</label>
                <input class="form-control {{ $errors->has('license_number') ? 'is-invalid' : '' }}" type="text" name="license_number" id="license_number" value="{{ old('license_number', $agent->license_number) }}">
                @if($errors->has('license_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('license_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.license_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="banking_info">{{ trans('cruds.agent.fields.banking_info') }}</label>
                <textarea class="form-control {{ $errors->has('banking_info') ? 'is-invalid' : '' }}" name="banking_info" id="banking_info">{{ old('banking_info', $agent->banking_info) }}</textarea>
                @if($errors->has('banking_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('banking_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.banking_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commission_policy">{{ trans('cruds.agent.fields.commission_policy') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('commission_policy') ? 'is-invalid' : '' }}" name="commission_policy" id="commission_policy">{!! old('commission_policy', $agent->commission_policy) !!}</textarea>
                @if($errors->has('commission_policy'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commission_policy') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.commission_policy_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.agent.fields.is_active') }}</label>
                @foreach(App\Models\Agent::IS_ACTIVE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="is_active_{{ $key }}" name="is_active" value="{{ $key }}" {{ old('is_active', $agent->is_active) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('is_active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_active') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.is_active_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.agents.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $agent->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection