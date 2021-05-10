@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.prize.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.prizes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.prize.fields.id') }}
                        </th>
                        <td>
                            {{ $prize->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.prize.fields.type') }}
                        </th>
                        <td>
                            {{ $prize->type->type ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.prize.fields.name') }}
                        </th>
                        <td>
                            {{ $prize->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.prize.fields.quantity') }}
                        </th>
                        <td>
                            {{ $prize->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.prize.fields.point_to_redeem') }}
                        </th>
                        <td>
                            {{ $prize->point_to_redeem }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.prize.fields.image') }}
                        </th>
                        <td>
                            @if($prize->image)
                                <a href="{{ $prize->image->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.prizes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection