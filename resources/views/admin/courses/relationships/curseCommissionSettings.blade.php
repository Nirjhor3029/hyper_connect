@can('commission_setting_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.commission-settings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.commissionSetting.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.commissionSetting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-curseCommissionSettings">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.agent') }}
                        </th>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.university') }}
                        </th>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.curse') }}
                        </th>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.comission_commited') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($commissionSettings as $key => $commissionSetting)
                        <tr data-entry-id="{{ $commissionSetting->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $commissionSetting->id ?? '' }}
                            </td>
                            <td>
                                {{ $commissionSetting->agent->agency_name ?? '' }}
                            </td>
                            <td>
                                {{ $commissionSetting->university->name ?? '' }}
                            </td>
                            <td>
                                {{ $commissionSetting->curse->name ?? '' }}
                            </td>
                            <td>
                                {{ $commissionSetting->comission_commited ?? '' }}
                            </td>
                            <td>
                                @can('commission_setting_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.commission-settings.show', $commissionSetting->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('commission_setting_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.commission-settings.edit', $commissionSetting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('commission_setting_delete')
                                    <form action="{{ route('admin.commission-settings.destroy', $commissionSetting->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('commission_setting_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.commission-settings.massDestroy') }}",
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
  let table = $('.datatable-curseCommissionSettings:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection