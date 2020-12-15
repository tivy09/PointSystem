@extends('layouts.app')
@section('content')

<div class="card" style="margin-top: 50px;">
    <div class="card-header">
        Apply Job 
    </div>

    <div class="card-body">
        <p> * = require</p>
        <form method="POST" action="{{ route('admin.Job.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="gender">Gender</label><br>
                <input type="radio" name="gender" value="Male" required>
                <label for="gender">Male</label>
                <input type="radio" name="gender" value="Female" required>
                <label for="gender">Female</label>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="Age">Age</label>
                <input class="form-control" type="number" name="age" id="age" max="80" min="18" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">Phone Number</label>
                <input class="form-control" type="text" name="phone" id="phone" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="position">Interview Position</label>
                <select class="form-control" name="position" id="position" required>
                    <option value="">Select one Job Position</option>
                @foreach($jobapps as $jobapp)
                    @if($jobapp->CPeople != 0)
                        <option value="{{ $jobapp->id }}">{{$jobapp->name}} | {{$jobapp->tyName}}</option>
                    @endif
                @endforeach
                </select>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="file">Your Resume</label>
                <input class="form-control" type="file" name="file" id="file" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="letter">Letter</label>
                <textarea class="form-control" name="letter" id="letter" cols="30" rows="10"></textarea>
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
@endsection