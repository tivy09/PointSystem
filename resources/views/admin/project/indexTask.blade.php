@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Task List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 8px;">
                            No.
                        </th>
                        <th style="width: 100px;">
                            Task Title
                        </th>
                        <th style="width: 130px;">
                            Task Start Date
                        </th>
                        <th style="width: 130px;">
                            Description
                        </th>
                        <th>
                            Status
                        </th>
                        <th style="width: 5px;">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>
                                {{ $loop -> index+1 }}
                            </td>
                            <td>
                                {{ $task->name }}
                            </td>
                            <td>
                                {{ $task->Start_date }}
                            </td>
                            <td>
                                {{ $task->description }}
                            </td>
                            <td>
                                @if($task->status != null)
                                    <div class="progress" style="height: 25px; background-color: white">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{ $task->status }}%">
                                        {{ $task->status }}%
                                        </div>
                                    </div>
                                @elseif($task->status == null)
                                    <div class="progress" style="height: 25px; background-color: white">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%; color: black;">
                                        0%
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td style="width: 170px;">
                            @if($task->user_id == null)
                                <form action="{{ route('admin.Project.EnrollTask',['id' => $task->id])}}" method="post">
                                @csrf
                                    <input type="hidden" name="employee_id" value="{{ Auth::user()->id }}">
                                    <button type="submit" class="btn btn-xs btn-success">
                                        Enroll Me
                                    </button>
                                </form>
                            @elseif($task->user_id == Auth::user()->id)
                                <form action="{{ route('admin.Project.Action', ['id' => $task->id]) }}" id="myformQQ + {{$task->id}}" method="post" onchange="submitForm()">
                                @csrf
                                    <select class="form-control select2" name="status">
                                        <option value="">Select a Status</option>
                                        <option value="0">Unfinish</option>
                                        <option value="50">In Progress</option>
                                        <option value="100">Finish</option>
                                    </select>
                                </form>
                                <script>
                                function submitForm() {
                                    document.getElementById('myformQQ + {{$task->id}}').submit();
                                }
                                </script>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection