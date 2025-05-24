@extends('layouts.admin')
@section('content')
@can('nationality_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.nationalities.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.nationality.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.nationality.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Nationality">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.nationality.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.nationality.fields.num_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.nationality.fields.alpha_2_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.nationality.fields.alpha_3_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.nationality.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.nationality.fields.nationality_en') }}
                        </th>
                        <th>
                            {{ trans('cruds.nationality.fields.nationality_bn') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nationalities as $key => $nationality)
                        <tr data-entry-id="{{ $nationality->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $nationality->id ?? '' }}
                            </td>
                            <td>
                                {{ $nationality->num_code ?? '' }}
                            </td>
                            <td>
                                {{ $nationality->alpha_2_code ?? '' }}
                            </td>
                            <td>
                                {{ $nationality->alpha_3_code ?? '' }}
                            </td>
                            <td>
                                {{ $nationality->country ?? '' }}
                            </td>
                            <td>
                                {{ $nationality->nationality_en ?? '' }}
                            </td>
                            <td>
                                {{ $nationality->nationality_bn ?? '' }}
                            </td>
                            <td>
                                @can('nationality_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.nationalities.show', $nationality->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('nationality_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.nationalities.edit', $nationality->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('nationality_delete')
                                    <form action="{{ route('admin.nationalities.destroy', $nationality->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('nationality_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.nationalities.massDestroy') }}",
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
  let table = $('.datatable-Nationality:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection