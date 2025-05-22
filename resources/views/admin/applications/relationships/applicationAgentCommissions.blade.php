@can('agent_commission_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.agent-commissions.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.agentCommission.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.agentCommission.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-applicationAgentCommissions">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.agentCommission.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.agentCommission.fields.agent') }}
                        </th>
                        <th>
                            {{ trans('cruds.agentCommission.fields.application') }}
                        </th>
                        <th>
                            {{ trans('cruds.agentCommission.fields.base_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.agentCommission.fields.final_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.agentCommission.fields.currency') }}
                        </th>
                        <th>
                            {{ trans('cruds.agentCommission.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agentCommissions as $key => $agentCommission)
                        <tr data-entry-id="{{ $agentCommission->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $agentCommission->id ?? '' }}
                            </td>
                            <td>
                                {{ $agentCommission->agent->agency_name ?? '' }}
                            </td>
                            <td>
                                {{ $agentCommission->application->intake_term ?? '' }}
                            </td>
                            <td>
                                {{ $agentCommission->base_amount ?? '' }}
                            </td>
                            <td>
                                {{ $agentCommission->final_amount ?? '' }}
                            </td>
                            <td>
                                {{ $agentCommission->currency ?? '' }}
                            </td>
                            <td>
                                {{ $agentCommission->status ?? '' }}
                            </td>
                            <td>
                                @can('agent_commission_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.agent-commissions.show', $agentCommission->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('agent_commission_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.agent-commissions.edit', $agentCommission->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('agent_commission_delete')
                                    <form action="{{ route('admin.agent-commissions.destroy', $agentCommission->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('agent_commission_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.agent-commissions.massDestroy') }}",
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
  let table = $('.datatable-applicationAgentCommissions:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection