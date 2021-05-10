@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.redeemConditionSetting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.redeem-condition-settings.update", [$redeemConditionSetting->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="type_id">{{ trans('cruds.redeemConditionSetting.fields.type') }}</label>
                <select class="form-control select2 {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type_id" id="type_id">
                    @foreach($types as $id => $entry)
                        <option value="{{ $id }}" {{ (old('type_id') ? old('type_id') : $redeemConditionSetting->type->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.redeemConditionSetting.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_point_to_redeem">{{ trans('cruds.redeemConditionSetting.fields.min_point_to_redeem') }}</label>
                <input class="form-control {{ $errors->has('min_point_to_redeem') ? 'is-invalid' : '' }}" type="number" name="min_point_to_redeem" id="min_point_to_redeem" value="{{ old('min_point_to_redeem', $redeemConditionSetting->min_point_to_redeem) }}" step="1">
                @if($errors->has('min_point_to_redeem'))
                    <div class="invalid-feedback">
                        {{ $errors->first('min_point_to_redeem') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.redeemConditionSetting.fields.min_point_to_redeem_helper') }}</span>
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