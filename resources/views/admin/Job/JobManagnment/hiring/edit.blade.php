@extends('layouts.admin')
@section('content')
@foreach($hirings as $hiring)
    <div class="card">
        <div class="card-header">
            Edit Job Hiring Process
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.Hirings.update', ['id' => $hiring->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="name">Job Hirings</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $hiring->name }}" required>
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