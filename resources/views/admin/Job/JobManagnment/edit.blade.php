@extends('layouts.admin')
@section('content')
@foreach($jobapps as $jobapp)
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} Job Detail
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.JobApp.update', ['id' => $jobapp->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Job Title</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Title" value="{{ $jobapp->name }}" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="department">Job Department</label>
                <select class="form-control" name="department" id="department" required>
                    <option value="">Select one Job Department</option>
                @foreach($departments as $department)
                    <option value="{{$department->id}}" @if($jobapp->department == $department->id) selected @endif>{{$department->name}}</option>
                @endforeach
                </select>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="location">Job Location</label>
                <select class="form-control" name="location" id="location" required>
                    <option value="">Select one Job Location</option>
                @foreach($locations as $location)
                    <option value="{{$location->id}}" @if($jobapp->location == $location->id) selected @endif>{{$location->name}}</option>
                @endforeach
                </select>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="types">Job Types</label><br>
                @foreach($types as $type)
                    <input type="radio" name="types" id="types" value="{{$type->id}}"  @if($jobapp->types == $type->id) checked="checked" @endif required>
                    <label for="{{$type->name}}">{{$type->name}}</label>
                @endforeach
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">Job Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $jobapp->description }}</textarea>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="CPeople">Number of the Worker</label>
                <input class="form-control" type="number" name="CPeople" id="CPeople" min="1" max="10" value="{{ $jobapp->CPeople }}" required>   
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
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