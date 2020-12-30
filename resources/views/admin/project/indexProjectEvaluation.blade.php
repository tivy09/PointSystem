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
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.Project.EvaluationRecord', ['id' => $task->id]) }}">
                                    Evaluation
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection