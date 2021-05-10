@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.pointSetting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.point-settings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="exchange_rate">{{ trans('cruds.pointSetting.fields.exchange_rate') }}</label>
                <input class="form-control {{ $errors->has('exchange_rate') ? 'is-invalid' : '' }}" type="number" name="exchange_rate" id="exchange_rate" value="{{ old('exchange_rate', '0') }}" step="0.01" required>
                @if($errors->has('exchange_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('exchange_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointSetting.fields.exchange_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="earn_amount">{{ trans('cruds.pointSetting.fields.earn_amount') }}</label>
                <input class="form-control {{ $errors->has('earn_amount') ? 'is-invalid' : '' }}" type="number" name="earn_amount" id="earn_amount" value="{{ old('earn_amount', '0') }}" step="1" required>
                @if($errors->has('earn_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('earn_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointSetting.fields.earn_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="enable">{{ trans('cruds.pointSetting.fields.enable') }}</label>
                <input class="form-control {{ $errors->has('enable') ? 'is-invalid' : '' }}" type="number" name="enable" id="enable" value="{{ old('enable', '1') }}" step="1" required>
                @if($errors->has('enable'))
                    <div class="invalid-feedback">
                        {{ $errors->first('enable') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointSetting.fields.enable_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="display">{{ trans('cruds.pointSetting.fields.display') }}</label>
                <input class="form-control {{ $errors->has('display') ? 'is-invalid' : '' }}" type="number" name="display" id="display" value="{{ old('display', '1') }}" step="1" required>
                @if($errors->has('display'))
                    <div class="invalid-feedback">
                        {{ $errors->first('display') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointSetting.fields.display_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="point_period">{{ trans('cruds.pointSetting.fields.point_period') }}</label>
                <input class="form-control {{ $errors->has('point_period') ? 'is-invalid' : '' }}" type="number" name="point_period" id="point_period" value="{{ old('point_period', '30') }}" step="1" required>
                @if($errors->has('point_period'))
                    <div class="invalid-feedback">
                        {{ $errors->first('point_period') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointSetting.fields.point_period_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="point_status">{{ trans('cruds.pointSetting.fields.point_status') }}</label>
                <input class="form-control {{ $errors->has('point_status') ? 'is-invalid' : '' }}" type="number" name="point_status" id="point_status" value="{{ old('point_status', '1') }}" step="1" required>
                @if($errors->has('point_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('point_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointSetting.fields.point_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="point_activate_period">{{ trans('cruds.pointSetting.fields.point_activate_period') }}</label>
                <input class="form-control {{ $errors->has('point_activate_period') ? 'is-invalid' : '' }}" type="number" name="point_activate_period" id="point_activate_period" value="{{ old('point_activate_period', '5') }}" step="1" required>
                @if($errors->has('point_activate_period'))
                    <div class="invalid-feedback">
                        {{ $errors->first('point_activate_period') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointSetting.fields.point_activate_period_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="point_activate_date">{{ trans('cruds.pointSetting.fields.point_activate_date') }}</label>
                <input class="form-control datetime {{ $errors->has('point_activate_date') ? 'is-invalid' : '' }}" type="text" name="point_activate_date" id="point_activate_date" value="{{ old('point_activate_date') }}">
                @if($errors->has('point_activate_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('point_activate_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointSetting.fields.point_activate_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="earn_rate">{{ trans('cruds.pointSetting.fields.earn_rate') }}</label>
                <input class="form-control {{ $errors->has('earn_rate') ? 'is-invalid' : '' }}" type="number" name="earn_rate" id="earn_rate" value="{{ old('earn_rate', '') }}" step="0.01">
                @if($errors->has('earn_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('earn_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pointSetting.fields.earn_rate_helper') }}</span>
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