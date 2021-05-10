@extends('layouts.admin')
@section('content')
@can('point_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.points.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.point.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.point.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Point">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.point.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.point.fields.pending_point') }}
                        </th>
                        <th>
                            {{ trans('cruds.point.fields.activate_point') }}
                        </th>
                        <th>
                            {{ trans('cruds.point.fields.expired_point') }}
                        </th>
                        <th>
                            {{ trans('cruds.point.fields.activate_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.point.fields.expired_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.point.fields.user') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($points as $key => $point)
                        <tr data-entry-id="{{ $point->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $point->id ?? '' }}
                            </td>
                            <td>
                                {{ $point->pending_point ?? '' }}
                            </td>
                            <td>
                                {{ $point->activate_point ?? '' }}
                            </td>
                            <td>
                                {{ $point->expired_point ?? '' }}
                            </td>
                            <td>
                                {{ $point->activate_date ?? '' }}
                            </td>
                            <td>
                                {{ $point->expired_date ?? '' }}
                            </td>
                            <td>
                                {{ $point->user->point ?? '' }}
                            </td>
                            <td>
                                @can('point_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.points.show', $point->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('point_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.points.edit', $point->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('point_delete')
                                    <form action="{{ route('admin.points.destroy', $point->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('point_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.points.massDestroy') }}",
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
  let table = $('.datatable-Point:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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