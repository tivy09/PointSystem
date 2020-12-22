@extends('layouts.admin')
@section('content')

@foreach($todos as $todo)
    <div class="card">
        <div class="card-header">
            Edit To do list
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('user.todo.update', ['id' => $todo->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="description">Description</label>
                    <input class="form-control" type="text" name="description" id="description" value="{{ $todo->description }}" required>
                    <input type="hidden" name="user_id" value="{{ $todo->id }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('home') }}">
                    Back To Home
                </a>
            </div>
        </div>
    </div>
@endforeach

@endsection