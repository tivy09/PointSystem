@extends('layouts.admin')
@section('content')
@can('redeem_condition_setting_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.redeem-condition-settings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.redeemConditionSetting.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.redeemConditionSetting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-RedeemConditionSetting">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.redeemConditionSetting.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.redeemConditionSetting.fields.type') }}
                        </th>
                        <th>
                            {{ trans('cruds.redeemConditionSetting.fields.min_point_to_redeem') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($redeemConditionSettings as $key => $redeemConditionSetting)
                        <tr data-entry-id="{{ $redeemConditionSetting->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $redeemConditionSetting->id ?? '' }}
                            </td>
                            <td>
                                {{ $redeemConditionSetting->type->type ?? '' }}
                            </td>
                            <td>
                                {{ $redeemConditionSetting->min_point_to_redeem ?? '' }}
                            </td>
                            <td>
                                @can('redeem_condition_setting_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.redeem-condition-settings.show', $redeemConditionSetting->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('redeem_condition_setting_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.redeem-condition-settings.edit', $redeemConditionSetting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('redeem_condition_setting_delete')
                                    <form action="{{ route('admin.redeem-condition-settings.destroy', $redeemConditionSetting->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('redeem_condition_setting_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.redeem-condition-settings.massDestroy') }}",
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
  let table = $('.datatable-RedeemConditionSetting:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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