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
                            Principal
                        </th>
                        <th style="width: 130px;">
                            Task Title
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
                                @if($task->User_id == null)
                                    No Person in charge
                                @else
                                    {{ $task->User_id }}
                                @endif
                            </td>
                            <td>
                                {{ $task->name }}
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
                            @if($task->User_id == null)
                                <span class="badge badge-pill badge-success">No Person in charge</span>
                            @else
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.Project.EvaluationRecord', ['id' => $task->id]) }}">
                                    Evaluation
                                </a>
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