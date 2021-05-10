@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pointLog.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.point-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pointLog.fields.id') }}
                        </th>
                        <td>
                            {{ $pointLog->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointLog.fields.prize') }}
                        </th>
                        <td>
                            {{ $pointLog->prize }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointLog.fields.voucher') }}
                        </th>
                        <td>
                            {{ $pointLog->voucher }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointLog.fields.address') }}
                        </th>
                        <td>
                            {{ $pointLog->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointLog.fields.point_amount') }}
                        </th>
                        <td>
                            {{ $pointLog->point_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointLog.fields.user') }}
                        </th>
                        <td>
                            {{ $pointLog->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pointLog.fields.type') }}
                        </th>
                        <td>
                            {{ $pointLog->type->type ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.point-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection