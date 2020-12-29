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
                                {{ $loop -> index+1 }}
                            </td>
                            <td>
                                {{ $project->Name }}
                            </td>
                            <td>
                                {{ $project->username }}
                            </td>
                            <td>
                                <div class="progress" style="height: 25px; background-color: white">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{ $project->Random }}%">
                                    {{$project->Random }}%
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">
                                <a class="btn btn-xs btn-success" href="{{ route('admin.Project.createProjectTask', ['id' => $project->id])}}">
                                    Create Task
                                </a>

                                <a class="btn btn-xs btn-primary" href="">
                                    {{ trans('global.view') }}
                                </a>

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