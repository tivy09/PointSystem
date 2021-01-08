@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Apply Leave
    </div>

    <div class="card-body">
        <form action="{{ route("user.leave.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="leave_type">Leave Type</label>
                <select name="leave_type" id="leave_type" class="form-control select2">
                    <option value="">Choose you leave type</option>
                    <option value="Annual Leave">Annual Leave</option>
                    <option value="Parental Leave">Parental Leave</option>
                    <option value="Maternity Leave">Maternity Leave</option>
                    <option value="Sick Leave">Sick Leave</option>
                </select>
            </div>
            <label for="start_time">Date from</label>
            <div class="form-group row">
                
                <div class="col-sm-4">
                    <input type="date" id="start_date" name="date_from" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="date" id="end_date" name="date_to" class="form-control" onchange="myFunction()">
                </div>
            </div>
            <div class="form-group">
                <label for="day">Day: </label>
                <input type="text" name="days" id="days" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="Reason">Reason: </label>
                <input type="text" name="reason" id="reason" class="form-control">
            </div>
            <div>
                <input type="hidden" name="employee_id" value="{{ Auth::user()->email }}">
                <input type="hidden" name="employee_name" value="{{ Auth::user()->name }}">
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection