@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} Project Title
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.Project.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Project Name</label>
                <input class="form-control" type="text" name="name" id="name" value="" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="Start_date">Project Date: </label><br>
                <span>Start Date</span>
                <input class="form-control" type="date" name="Start_date" id="Start_date" value="" required>
                <span>End Date</span>
                <input class="form-control" type="date" name="End_date" id="End_date" value="" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="NumberofMember">Total Number Project Member</label>
                <input class="form-control" type="number" name="NumberofMember" id="NumberofMember" value="" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="leader">Select a leader</label>
                <select class="form-control select2" name="leader" id="leader" required>
                            <option value="">Select a leader</option>
                    @foreach($users as $user)
                        @if($user->name != "Admin")
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
                <span class="help-block">{{ trans('cruds.role.fields.permissions_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">Project Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
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