@extends('layouts.admin')
@section('content')
@foreach($users as $user)
    <div class="card">
        <div class="card-header">
            Edit Employee Salary
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('user.salary.update', ['id' => $user->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" required readonly>
                </div>
                <div class="form-group">
                    <label class="required" for="Salary_amount">Salary</label>
                    <input class="form-control" type="text" name="Salary_amount" id="Salary_amount" value="{{ $user->salary }}" required>
                    <input type="hidden" name="employee_id" value="{{ $user->id }}">
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