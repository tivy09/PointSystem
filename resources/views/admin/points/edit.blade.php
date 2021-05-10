@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.point.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.points.update", [$point->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="pending_point">{{ trans('cruds.point.fields.pending_point') }}</label>
                <input class="form-control {{ $errors->has('pending_point') ? 'is-invalid' : '' }}" type="number" name="pending_point" id="pending_point" value="{{ old('pending_point', $point->pending_point) }}" step="1">
                @if($errors->has('pending_point'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pending_point') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.point.fields.pending_point_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activate_point">{{ trans('cruds.point.fields.activate_point') }}</label>
                <input class="form-control {{ $errors->has('activate_point') ? 'is-invalid' : '' }}" type="number" name="activate_point" id="activate_point" value="{{ old('activate_point', $point->activate_point) }}" step="1">
                @if($errors->has('activate_point'))
                    <div class="invalid-feedback">
                        {{ $errors->first('activate_point') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.point.fields.activate_point_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="expired_point">{{ trans('cruds.point.fields.expired_point') }}</label>
                <input class="form-control {{ $errors->has('expired_point') ? 'is-invalid' : '' }}" type="number" name="expired_point" id="expired_point" value="{{ old('expired_point', $point->expired_point) }}" step="1">
                @if($errors->has('expired_point'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expired_point') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.point.fields.expired_point_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activate_date">{{ trans('cruds.point.fields.activate_date') }}</label>
                <input class="form-control datetime {{ $errors->has('activate_date') ? 'is-invalid' : '' }}" type="text" name="activate_date" id="activate_date" value="{{ old('activate_date', $point->activate_date) }}">
                @if($errors->has('activate_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('activate_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.point.fields.activate_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="expired_date">{{ trans('cruds.point.fields.expired_date') }}</label>
                <input class="form-control datetime {{ $errors->has('expired_date') ? 'is-invalid' : '' }}" type="text" name="expired_date" id="expired_date" value="{{ old('expired_date', $point->expired_date) }}">
                @if($errors->has('expired_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expired_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.point.fields.expired_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.point.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $point->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.point.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection