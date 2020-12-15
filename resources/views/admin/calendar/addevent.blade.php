@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Create Event
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('calendar.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Event name</label>
                <input type="text" class="form-control" name="title" placeholder="Enter event name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Color</label>
                <input type="color" class="form-control" name="color">
            </div>
            <div class="form-group">
                <label>Start date</label>
                <input type="datetime-local" class="form-control" name="start_date" id="">
            </div>
            <div class="form-group">
                <label>End date</label>
                <input type="datetime-local" class="form-control" name="end_date" id="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection