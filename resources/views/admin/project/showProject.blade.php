@extends('layouts.admin')
@section('content')
@foreach($projects as $project)
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} Project Detail
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $project->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $project->Name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Start Date
                        </th>
                        <td>
                            {{ $project->Start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            End Date
                        </th>
                        <td>
                            {{ $project->End_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Leader
                        </th>
                        <td>
                            {{ $project->username }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Description
                        </th>
                        <td>
                            {{ $project->Description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Number for the group member
                        </th>
                        <td>
                            {{ $project->NumberofMember }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status
                        </th>
                        <td>
                            @if($project->Status2 == null)
                                In Progress
                            @else  
                                Project Already End
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.Project.indexProject') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach

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
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{ $task->Status }}%; color: white;">
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection