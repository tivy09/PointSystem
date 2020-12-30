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
                        <th style="width: 200px;">
                            Task Title
                        </th>
                        <th style="width: 130px;">
                            Task Start Date
                        </th>
                        <th style="width: 400px;">
                            Description
                        </th>
                        <th style="width: 50px;">
                            Principal
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
                                {{ $task->Description }}
                            </td>
                            <td>
                                @if($task->User_id == null)
                                    No Person in charge
                                @else
                                    {{ $task->User_id }}
                                @endif
                                </td>
                            <td>
                                @if($task->Status != null)
                                    <div class="progress" style="height: 25px; background-color: white">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{ $task->Status }}%; color: black;">
                                        {{ $task->Status }}%
                                        </div>
                                    </div>
                                @elseif($task->Status == null)
                                    <div class="progress" style="height: 25px; background-color: white">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%; color: black;">
                                        0%
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td style="width: 170px;">
                            @if($task->User_id == null && $task->Status == null)
                                <form action="{{ route('admin.Project.enrollProjectTask',['id' => $task->id]) }}" method="post">
                                @csrf
                                    <input type="hidden" name="employee_id" value="{{ Auth::user()->name }}">
                                    <button type="submit" class="btn btn-xs btn-success">
                                        Enroll Me
                                    </button>
                                </form>
                                
                            @elseif($task->User_id == Auth::user()->name)
                                <form action="{{ route('admin.Project.ProjectTaskAction', ['id' => $task->id]) }}" id="myformQQ{{$task->id}}" method="post" onchange="submitForm()">
                                @csrf
                                    <select class="form-control select2" name="Status">
                                    @if($task->Status == 50)
                                        <option value="">Select a Status</option>
                                        <option value="0">Unfinish</option>
                                        <option value="50" selected>In Progress</option>
                                        <option value="100">Finish</option>
                                    @elseif($task->Status == 100)
                                        <option value="">Select a Status</option>
                                        <option value="0">Unfinish</option>
                                        <option value="50">In Progress</option>
                                        <option value="100" selected>Finish</option>
                                    @elseif($task->Status == null)
                                        <option value="">Select a Status</option>
                                        <option value="0">Unfinish</option>
                                        <option value="50">In Progress</option>
                                        <option value="100">Finish</option>
                                    @elseif($task->Status == 0)
                                        <option value="">Select a Status</option>
                                        <option value="0" selected>Unfinish</option>
                                        <option value="50">In Progress</option>
                                        <option value="100">Finish</option>
                                    @endif
                                    </select>
                                </form>
                                <script>
                                    function submitForm() {
                                        document.getElementById('myformQQ{{$task->id}}').submit();
                                    }
                                </script>
                            @elseif($task->User_id != Auth::user()->name)
                                <span class="badge badge-pill badge-warning">Already Selected</span>
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