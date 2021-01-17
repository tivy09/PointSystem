@extends('layouts.admin')
@section('content')

@foreach($events as $event)
    <div class="card">
        <div class="card-header">
            Edit Event
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.calendar.update', ['id' => $event->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Event name</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter event name" value="{{ $event->title }}">
                </div>
                <div class="form-group">
                    <label>Start date</label>
                    <input type="datetime" class="form-control" name="start_date" id="" value="{{ $event->start_date }}">
                </div>
                <div class="form-group">
                    <label>End date</label>
                    <input type="datetime" class="form-control" name="end_date" id="" value="{{ $event->end_date }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endforeach
@endsection