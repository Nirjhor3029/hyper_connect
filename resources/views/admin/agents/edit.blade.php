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
                <label for="user_id">{{ trans('cruds.agent.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $agent->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.user_helper') }}</span>
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
                <label for="kyc_status">{{ trans('cruds.agent.fields.kyc_status') }}</label>
                <input class="form-control {{ $errors->has('kyc_status') ? 'is-invalid' : '' }}" type="text" name="kyc_status" id="kyc_status" value="{{ old('kyc_status', $agent->kyc_status) }}">
                @if($errors->has('kyc_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kyc_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.kyc_status_helper') }}</span>
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