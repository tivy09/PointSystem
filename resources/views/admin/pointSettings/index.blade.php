@extends('layouts.admin')
@section('content')
@can('point_setting_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.point-settings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.pointSetting.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.pointSetting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PointSetting">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.exchange_rate') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.earn_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.enable') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.display') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.point_period') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.point_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.point_activate_period') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.point_activate_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.pointSetting.fields.earn_rate') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pointSettings as $key => $pointSetting)
                        <tr data-entry-id="{{ $pointSetting->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pointSetting->id ?? '' }}
                            </td>
                            <td>
                                {{ $pointSetting->exchange_rate ?? '' }}
                            </td>
                            <td>
                                {{ $pointSetting->earn_amount ?? '' }}
                            </td>
                            <td>
                                {{ $pointSetting->enable ?? '' }}
                            </td>
                            <td>
                                {{ $pointSetting->display ?? '' }}
                            </td>
                            <td>
                                {{ $pointSetting->point_period ?? '' }}
                            </td>
                            <td>
                                {{ $pointSetting->point_status ?? '' }}
                            </td>
                            <td>
                                {{ $pointSetting->point_activate_period ?? '' }}
                            </td>
                            <td>
                                {{ $pointSetting->point_activate_date ?? '' }}
                            </td>
                            <td>
                                {{ $pointSetting->earn_rate ?? '' }}
                            </td>
                            <td>
                                @can('point_setting_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.point-settings.show', $pointSetting->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('point_setting_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.point-settings.edit', $pointSetting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('point_setting_delete')
                                    <form action="{{ route('admin.point-settings.destroy', $pointSetting->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('point_setting_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.point-settings.massDestroy') }}",
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
  let table = $('.datatable-PointSetting:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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