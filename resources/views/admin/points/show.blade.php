@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.point.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.points.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.id') }}
                        </th>
                        <td>
                            {{ $point->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.pending_point') }}
                        </th>
                        <td>
                            {{ $point->pending_point }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.activate_point') }}
                        </th>
                        <td>
                            {{ $point->activate_point }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.expired_point') }}
                        </th>
                        <td>
                            {{ $point->expired_point }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.activate_date') }}
                        </th>
                        <td>
                            {{ $point->activate_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.expired_date') }}
                        </th>
                        <td>
                            {{ $point->expired_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.user') }}
                        </th>
                        <td>
                            {{ $point->user->point ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.points.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection