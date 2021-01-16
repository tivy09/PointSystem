@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('admin.Project.createProject') }}">
            {{ trans('global.add') }} New Project
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Project {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px;">
                            No.
                        </th>
                        <th style="width: 125px;">
                            Project Title
                        </th>
                        <th style="width: 125px;">
                            Project Leader
                        </th>
                        <th style="width: 400px;">
                            Status
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Projects as $project)
                        <tr>
                            <td>
                                {{ $loop->index+1 }}
                            </td>
                            <td>
                                {{ $project->Name }}
                            </td>
                            <td>
                                {{ $project->username }}
                            </td>
                            <td>
                            @if($PLPL[$loop->index]==0)
                                <div class="progress" style="height: 25px; background-color: white">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%; color: black;">
                                    0%
                                    </div>
                                </div>
                            @else
                                <div class="progress" style="height: 25px; background-color: white">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{ $PLPL[$loop->index] }}%">
                                    {{ $PLPL[$loop->index] }}%
                                    </div>
                                </div>
                            @endif
                            </td>
                            <td style="width: 150px;">
                                @if($project->username != Auth::user()->name)
                                    <span class="badge badge-pill badge-success">You are not the creator.</span>
                                @else
                                    @if($project->Status2 == null)
                                        <a class="btn btn-xs btn-success" href="{{ route('admin.Project.createProjectTask', ['id' => $project->id])}}">
                                            Create Task
                                        </a>

                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.Project.showProject', ['id' => $project->id])}}">
                                            {{ trans('global.view') }}
                                        </a>

                                        <a class="btn btn-xs btn-info" href="{{ route('admin.Project.deleteProject', ['id' => $project->id])}}" onclick="return confirm('Sure You Want End this Project?')">
                                            {{ trans('global.delete') }}
                                        </a>
                                    @elseif($project->Status2 == 1)
                                        <span class="badge badge-pill badge-warning">Already End</span>
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.Project.showProject', ['id' => $project->id])}}">
                                            {{ trans('global.view') }}
                                        </a>
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.Project.deleteProjectRecord', ['id' => $project->id])}}" onclick="return confirm('Sure You Want Delete?')">
                                            {{ trans('global.delete') }} Record
                                        </a>
                                    @endif
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