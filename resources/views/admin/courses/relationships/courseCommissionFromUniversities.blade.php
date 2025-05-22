@can('commission_from_university_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.commission-from-universities.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.commissionFromUniversity.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.commissionFromUniversity.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-courseCommissionFromUniversities">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.commissionFromUniversity.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.commissionFromUniversity.fields.university') }}
                        </th>
                        <th>
                            {{ trans('cruds.commissionFromUniversity.fields.course') }}
                        </th>
                        <th>
                            {{ trans('cruds.commissionFromUniversity.fields.comission') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($commissionFromUniversities as $key => $commissionFromUniversity)
                        <tr data-entry-id="{{ $commissionFromUniversity->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $commissionFromUniversity->id ?? '' }}
                            </td>
                            <td>
                                {{ $commissionFromUniversity->university->name ?? '' }}
                            </td>
                            <td>
                                {{ $commissionFromUniversity->course->name ?? '' }}
                            </td>
                            <td>
                                {{ $commissionFromUniversity->comission ?? '' }}
                            </td>
                            <td>
                                @can('commission_from_university_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.commission-from-universities.show', $commissionFromUniversity->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('commission_from_university_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.commission-from-universities.edit', $commissionFromUniversity->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('commission_from_university_delete')
                                    <form action="{{ route('admin.commission-from-universities.destroy', $commissionFromUniversity->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('commission_from_university_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.commission-from-universities.massDestroy') }}",
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
  let table = $('.datatable-courseCommissionFromUniversities:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection