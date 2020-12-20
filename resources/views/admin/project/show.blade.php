@extends('layouts.admin')
@section('content')

@foreach($projects as $project)
<div class="card">
    <div class="card-header">
        Project Detail
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Project Name
                        </th>
                        <td>
                            {{ $project->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Project Start Date
                        </th>
                        <td>
                            {{ $project->Start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Project End Date
                        </th>
                        <td>
                            {{ $project->End_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Project Leader
                        </th>
                        <td>
                            {{ $project->username }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Project Description
                        </th>
                        <td>
                            {{ $project->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Number for Member
                        </th>
                        <td>
                            {{ $project->NumberofMember }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.Project.index') }}">
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
                        <th style="width: 10px;">
                            No.
                        </th>
                        <th style="width: 150px;">
                            Task Title
                        </th>
                        <th style="width: 150px;">
                            Task Start Date
                        </th>
                        <th style="width: 450px;">
                            Description
                        </th>
                        <th style="width: 450px;">
                            Status
                        </th>
                        <th>
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
                                <div class="progress" style="height: 25px; background-color: white">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    60%
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">
                                <a class="btn btn-xs btn-info" href="">
                                    {{ trans('global.delete') }}
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