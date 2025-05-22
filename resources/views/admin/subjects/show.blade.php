@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.subject.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subjects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.id') }}
                        </th>
                        <td>
                            {{ $subject->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.university') }}
                        </th>
                        <td>
                            {{ $subject->university->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.course') }}
                        </th>
                        <td>
                            {{ $subject->course->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.subject_name') }}
                        </th>
                        <td>
                            {{ $subject->subject_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.subject_details') }}
                        </th>
                        <td>
                            {{ $subject->subject_details }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.duration') }}
                        </th>
                        <td>
                            {{ $subject->duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.course_fee') }}
                        </th>
                        <td>
                            {{ $subject->course_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.required_fee') }}
                        </th>
                        <td>
                            {{ $subject->required_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.other_fees') }}
                        </th>
                        <td>
                            {{ $subject->other_fees }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.eligibility_criterias') }}
                        </th>
                        <td>
                            {!! $subject->eligibility_criterias !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.english_requirements') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->english_requirements ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.waiver_program') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->waiver_program ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.waiver_amount') }}
                        </th>
                        <td>
                            {{ $subject->waiver_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.waiver_criterias') }}
                        </th>
                        <td>
                            {!! $subject->waiver_criterias !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.subject_prerequisits') }}
                        </th>
                        <td>
                            {!! $subject->subject_prerequisits !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.commission') }}
                        </th>
                        <td>
                            {{ $subject->commission }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.tags') }}
                        </th>
                        <td>
                            @foreach($subject->tags as $key => $tags)
                                <span class="label label-info">{{ $tags->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subjects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection