@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.statusLog.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLog.fields.id') }}
                        </th>
                        <td>
                            {{ $statusLog->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLog.fields.related_type') }}
                        </th>
                        <td>
                            {{ $statusLog->related_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLog.fields.related') }}
                        </th>
                        <td>
                            {{ $statusLog->related }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLog.fields.status_from') }}
                        </th>
                        <td>
                            {{ $statusLog->status_from->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLog.fields.status_to') }}
                        </th>
                        <td>
                            {{ $statusLog->status_to->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLog.fields.changed_by') }}
                        </th>
                        <td>
                            {{ $statusLog->changed_by->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLog.fields.remarks') }}
                        </th>
                        <td>
                            {!! $statusLog->remarks !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection