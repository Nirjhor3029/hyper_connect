@can('student_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.students.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.student.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.student.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-univertsitiesStudents">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.student.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.nationality') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.lead_agent') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.handelling_agent') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.commission_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.payment_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.current_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.scholarship_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.univertsities') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.subjects') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.academic_certificates') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.max_education_level') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.offer_letter_attachments') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $key => $student)
                        <tr data-entry-id="{{ $student->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $student->id ?? '' }}
                            </td>
                            <td>
                                {{ $student->name ?? '' }}
                            </td>
                            <td>
                                {{ $student->email ?? '' }}
                            </td>
                            <td>
                                {{ $student->phone ?? '' }}
                            </td>
                            <td>
                                {{ $student->nationality->nationality_en ?? '' }}
                            </td>
                            <td>
                                {{ $student->lead_agent->agency_name ?? '' }}
                            </td>
                            <td>
                                {{ $student->handelling_agent->agency_name ?? '' }}
                            </td>
                            <td>
                                {{ $student->commission_amount ?? '' }}
                            </td>
                            <td>
                                {{ $student->payment_status ?? '' }}
                            </td>
                            <td>
                                {{ $student->current_status ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $student->scholarship_status ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $student->scholarship_status ? 'checked' : '' }}>
                            </td>
                            <td>
                                @foreach($student->univertsities as $key => $item)
                                    <span class="badge badge-info">{{ $item->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach($student->subjects as $key => $item)
                                    <span class="badge badge-info">{{ $item->subject_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach($student->academic_certificates as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $student->max_education_level->title ?? '' }}
                            </td>
                            <td>
                                @foreach($student->offer_letter_attachments as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                @can('student_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.students.show', $student->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('student_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.students.edit', $student->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('student_delete')
                                    <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('student_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.students.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-univertsitiesStudents:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection