@extends('layouts.admin')
@section('content')
@can('visa_application_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.visa-applications.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.visaApplication.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.visaApplication.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-VisaApplication">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.visaApplication.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaApplication.fields.application') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaApplication.fields.visa_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaApplication.fields.current_stage') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaApplication.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaApplication.fields.submitted_at') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visaApplications as $key => $visaApplication)
                        <tr data-entry-id="{{ $visaApplication->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $visaApplication->id ?? '' }}
                            </td>
                            <td>
                                {{ $visaApplication->application->intake_term ?? '' }}
                            </td>
                            <td>
                                {{ $visaApplication->visa_type ?? '' }}
                            </td>
                            <td>
                                {{ $visaApplication->current_stage ?? '' }}
                            </td>
                            <td>
                                {{ $visaApplication->status ?? '' }}
                            </td>
                            <td>
                                {{ $visaApplication->submitted_at ?? '' }}
                            </td>
                            <td>
                                @can('visa_application_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.visa-applications.show', $visaApplication->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('visa_application_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.visa-applications.edit', $visaApplication->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('visa_application_delete')
                                    <form action="{{ route('admin.visa-applications.destroy', $visaApplication->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('visa_application_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.visa-applications.massDestroy') }}",
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
  let table = $('.datatable-VisaApplication:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection