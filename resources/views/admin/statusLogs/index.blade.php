@extends('layouts.admin')
@section('content')
@can('status_log_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.status-logs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.statusLog.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.statusLog.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-StatusLog">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.statusLog.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.statusLog.fields.related_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.statusLog.fields.related') }}
                        </th>
                        <th>
                            {{ trans('cruds.statusLog.fields.status_from') }}
                        </th>
                        <th>
                            {{ trans('cruds.statusLog.fields.status_to') }}
                        </th>
                        <th>
                            {{ trans('cruds.statusLog.fields.changed_by') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($statusLogs as $key => $statusLog)
                        <tr data-entry-id="{{ $statusLog->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $statusLog->id ?? '' }}
                            </td>
                            <td>
                                {{ $statusLog->related_type ?? '' }}
                            </td>
                            <td>
                                {{ $statusLog->related ?? '' }}
                            </td>
                            <td>
                                {{ $statusLog->status_from->name ?? '' }}
                            </td>
                            <td>
                                {{ $statusLog->status_to->name ?? '' }}
                            </td>
                            <td>
                                {{ $statusLog->changed_by->name ?? '' }}
                            </td>
                            <td>
                                @can('status_log_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.status-logs.show', $statusLog->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('status_log_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.status-logs.edit', $statusLog->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('status_log_delete')
                                    <form action="{{ route('admin.status-logs.destroy', $statusLog->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('status_log_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.status-logs.massDestroy') }}",
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
  let table = $('.datatable-StatusLog:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection