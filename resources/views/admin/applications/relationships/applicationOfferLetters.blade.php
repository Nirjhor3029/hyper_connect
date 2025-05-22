@can('offer_letter_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.offer-letters.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.offerLetter.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.offerLetter.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-applicationOfferLetters">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.offerLetter.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.offerLetter.fields.application') }}
                        </th>
                        <th>
                            {{ trans('cruds.offerLetter.fields.issue_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.offerLetter.fields.issued_by') }}
                        </th>
                        <th>
                            {{ trans('cruds.offerLetter.fields.delivery_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.offerLetter.fields.visible_to_student') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($offerLetters as $key => $offerLetter)
                        <tr data-entry-id="{{ $offerLetter->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $offerLetter->id ?? '' }}
                            </td>
                            <td>
                                {{ $offerLetter->application->intake_term ?? '' }}
                            </td>
                            <td>
                                {{ $offerLetter->issue_date ?? '' }}
                            </td>
                            <td>
                                {{ $offerLetter->issued_by->name ?? '' }}
                            </td>
                            <td>
                                {{ $offerLetter->delivery_status ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $offerLetter->visible_to_student ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $offerLetter->visible_to_student ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('offer_letter_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.offer-letters.show', $offerLetter->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('offer_letter_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.offer-letters.edit', $offerLetter->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('offer_letter_delete')
                                    <form action="{{ route('admin.offer-letters.destroy', $offerLetter->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('offer_letter_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.offer-letters.massDestroy') }}",
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
  let table = $('.datatable-applicationOfferLetters:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection