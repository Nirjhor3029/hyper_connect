@extends('layouts.admin')
@section('content')
@can('other_fee_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.other-fees.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.otherFee.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.otherFee.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-OtherFee">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.otherFee.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherFee.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherFee.fields.service_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherFee.fields.admission_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherFee.fields.visa_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherFee.fields.emgs_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherFee.fields.registration_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherFee.fields.resource_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherFee.fields.caution_fee') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($otherFees as $key => $otherFee)
                        <tr data-entry-id="{{ $otherFee->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $otherFee->id ?? '' }}
                            </td>
                            <td>
                                {{ $otherFee->country->name ?? '' }}
                            </td>
                            <td>
                                {{ $otherFee->service_fee ?? '' }}
                            </td>
                            <td>
                                {{ $otherFee->admission_fee ?? '' }}
                            </td>
                            <td>
                                {{ $otherFee->visa_fee ?? '' }}
                            </td>
                            <td>
                                {{ $otherFee->emgs_fee ?? '' }}
                            </td>
                            <td>
                                {{ $otherFee->registration_fee ?? '' }}
                            </td>
                            <td>
                                {{ $otherFee->resource_fee ?? '' }}
                            </td>
                            <td>
                                {{ $otherFee->caution_fee ?? '' }}
                            </td>
                            <td>
                                @can('other_fee_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.other-fees.show', $otherFee->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('other_fee_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.other-fees.edit', $otherFee->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('other_fee_delete')
                                    <form action="{{ route('admin.other-fees.destroy', $otherFee->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('other_fee_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.other-fees.massDestroy') }}",
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
  let table = $('.datatable-OtherFee:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection