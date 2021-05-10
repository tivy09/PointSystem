@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pointSetting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.point-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.id') }}
                        </th>
                        <td>
                            {{ $pointSetting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.exchange_rate') }}
                        </th>
                        <td>
                            {{ $pointSetting->exchange_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.earn_amount') }}
                        </th>
                        <td>
                            {{ $pointSetting->earn_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.enable') }}
                        </th>
                        <td>
                            {{ $pointSetting->enable }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.display') }}
                        </th>
                        <td>
                            {{ $pointSetting->display }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.point_period') }}
                        </th>
                        <td>
                            {{ $pointSetting->point_period }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.point_status') }}
                        </th>
                        <td>
                            {{ $pointSetting->point_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.point_activate_period') }}
                        </th>
                        <td>
                            {{ $pointSetting->point_activate_period }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.point_activate_date') }}
                        </th>
                        <td>
                            {{ $pointSetting->point_activate_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointSetting.fields.earn_rate') }}
                        </th>
                        <td>
                            {{ $pointSetting->earn_rate }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.point-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection