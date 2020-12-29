@extends('layouts.admin')
@section('content')

@foreach($projects as $project)
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} Project Title
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.Project.storeProjectTask') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Task Name</label>
                <input class="form-control" type="text" name="name" id="name" value="" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="Start_date">Task Complete Date: </label><br>
                <input class="form-control" type="date" name="Start_date" id="Start_date" value="" required>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="Description">Task Description</label>
                <textarea class="form-control" name="Description" id="Description" cols="30" rows="10"></textarea>
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <input type="hidden" name="Project_id" value="{{ $project->id }}">
                <input type="hidden" name="Leader_id" value="{{ Auth::user()->id }}">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endforeach

@endsection