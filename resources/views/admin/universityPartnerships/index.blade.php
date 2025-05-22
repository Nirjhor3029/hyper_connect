@extends('layouts.admin')
@section('content')
@can('university_partnership_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.university-partnerships.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.universityPartnership.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.universityPartnership.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-UniversityPartnership">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.university') }}
                        </th>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.partner_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.partner_type') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($universityPartnerships as $key => $universityPartnership)
                        <tr data-entry-id="{{ $universityPartnership->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $universityPartnership->id ?? '' }}
                            </td>
                            <td>
                                {{ $universityPartnership->university->name ?? '' }}
                            </td>
                            <td>
                                {{ $universityPartnership->partner_name ?? '' }}
                            </td>
                            <td>
                                {{ $universityPartnership->partner_type ?? '' }}
                            </td>
                            <td>
                                @can('university_partnership_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.university-partnerships.show', $universityPartnership->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('university_partnership_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.university-partnerships.edit', $universityPartnership->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('university_partnership_delete')
                                    <form action="{{ route('admin.university-partnerships.destroy', $universityPartnership->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('university_partnership_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.university-partnerships.massDestroy') }}",
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
  let table = $('.datatable-UniversityPartnership:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection