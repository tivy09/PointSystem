@extends('layouts.admin')
@section('content')
@foreach($locations as $location)
    <div class="card">
        <div class="card-header">
            Edit Job Location
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.Location.update', ['id' => $location->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="name">Job Location Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $location->name }}" required>
                    <input type="hidden" name="employee_id" value="{{ $location->id }}">
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