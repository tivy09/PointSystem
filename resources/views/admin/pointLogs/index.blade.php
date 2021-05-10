@extends('layouts.admin')
@section('content')
@can('point_log_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.point-logs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.pointLog.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.pointLog.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PointLog">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.pointLog.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointLog.fields.prize') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointLog.fields.voucher') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointLog.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointLog.fields.point_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointLog.fields.user') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointLog.fields.type') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pointLogs as $key => $pointLog)
                        <tr data-entry-id="{{ $pointLog->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pointLog->id ?? '' }}
                            </td>
                            <td>
                                {{ $pointLog->prize ?? '' }}
                            </td>
                            <td>
                                {{ $pointLog->voucher ?? '' }}
                            </td>
                            <td>
                                {{ $pointLog->address ?? '' }}
                            </td>
                            <td>
                                {{ $pointLog->point_amount ?? '' }}
                            </td>
                            <td>
                                {{ $pointLog->user->name ?? '' }}
                            </td>
                            <td>
                                {{ $pointLog->type->type ?? '' }}
                            </td>
                            <td>
                                @can('point_log_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.point-logs.show', $pointLog->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('point_log_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.point-logs.edit', $pointLog->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('point_log_delete')
                                    <form action="{{ route('admin.point-logs.destroy', $pointLog->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('point_log_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.point-logs.massDestroy') }}",
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
  let table = $('.datatable-PointLog:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  $('div#sidebar').on('transitionend', function(e) {
    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
  })
  
})

</script>
@endsection