@extends('layouts.admin')
@section('content')
@foreach($departments as $department)
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} Department
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.department.update', ['id' => $department->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Department Name</label>
                <input class="form-control=" type="text" name="name" id="name" value="{{ $department->name }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endforeach


@endsection