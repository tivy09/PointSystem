@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.pointLog.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.point-logs.update", [$pointLog->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="prize">{{ trans('cruds.pointLog.fields.prize') }}</label>
                <input class="form-control {{ $errors->has('prize') ? 'is-invalid' : '' }}" type="number" name="prize" id="prize" value="{{ old('prize', $pointLog->prize) }}" step="1">
                @if($errors->has('prize'))
                    <div class="invalid-feedback">
                        {{ $errors->first('prize') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointLog.fields.prize_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="voucher">{{ trans('cruds.pointLog.fields.voucher') }}</label>
                <input class="form-control {{ $errors->has('voucher') ? 'is-invalid' : '' }}" type="number" name="voucher" id="voucher" value="{{ old('voucher', $pointLog->voucher) }}" step="1">
                @if($errors->has('voucher'))
                    <div class="invalid-feedback">
                        {{ $errors->first('voucher') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointLog.fields.voucher_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.pointLog.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $pointLog->address) }}">
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointLog.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="point_amount">{{ trans('cruds.pointLog.fields.point_amount') }}</label>
                <input class="form-control {{ $errors->has('point_amount') ? 'is-invalid' : '' }}" type="number" name="point_amount" id="point_amount" value="{{ old('point_amount', $pointLog->point_amount) }}" step="1">
                @if($errors->has('point_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('point_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointLog.fields.point_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.pointLog.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $pointLog->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointLog.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_id">{{ trans('cruds.pointLog.fields.type') }}</label>
                <select class="form-control select2 {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type_id" id="type_id">
                    @foreach($types as $id => $entry)
                        <option value="{{ $id }}" {{ (old('type_id') ? old('type_id') : $pointLog->type->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointLog.fields.type_helper') }}</span>
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