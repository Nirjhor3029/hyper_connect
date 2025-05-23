@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.userSetting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.user-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.userSetting.fields.id') }}
                        </th>
                        <td>
                            {{ $userSetting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userSetting.fields.user') }}
                        </th>
                        <td>
                            {{ $userSetting->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userSetting.fields.preferences') }}
                        </th>
                        <td>
                            {{ $userSetting->preferences }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userSetting.fields.language') }}
                        </th>
                        <td>
                            {{ $userSetting->language }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userSetting.fields.theme_mode') }}
                        </th>
                        <td>
                            {{ $userSetting->theme_mode }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.user-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection