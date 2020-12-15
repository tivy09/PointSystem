@extends('layouts.admin')
@section('content')
@foreach($types as $type)
    <div class="card">
        <div class="card-header">
            Edit Job Types
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.Types.update', ['id' => $type->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="name">Job Types</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $type->name }}" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endforeach
@endsection