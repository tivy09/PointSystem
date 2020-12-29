@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} Project Title
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.Project.storeProject') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Project Name</label>
                <input class="form-control" type="text" name="Name" id="Name" value="" required>
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
                <label class="required" for="Description">Project Description</label>
                <textarea class="form-control" name="Description" id="Description" cols="30" rows="10"></textarea>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <input type="hidden" name="Leader_id" value="{{ Auth::user()->id }}">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection