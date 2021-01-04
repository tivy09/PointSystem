@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('admin.JobApp.create') }}">
            Create Job
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Job List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th style="width: 15px;">
                            No.
                        </th>
                        <th>
                            Job Name
                        </th>              
                        <th>
                            Job Department
                        </th>    
                        <th>
                            Number of Worker
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td>
                            {{$loop -> index+1 }}
                        </td>
                        <td>
                            {{$job->name }}
                        </td>
                        <td>
                            {{$job->deName }}
                        </td>
                        <td>
                            {{$job->JobCPeople }}
                        </td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.JobApp.show', ['id' => $job->id]) }}">
                                {{ trans('global.view') }}
                            </a>
                            <a class="btn btn-xs btn-info" href="{{ route('admin.JobApp.edit', ['id' => $job->id]) }}">
                                {{ trans('global.edit') }}
                            </a>
                            <a href="{{ route('admin.JobApp.destroyApp', ['id' => $job->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')">
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

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('admin.Location.create') }}">
            Create Location
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Job Location List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th style="width: 15px;">
                            No.
                        </th>
                        <th>
                            Location name
                        </th>              
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($locations as $location)
                    <tr>
                        <td>
                            {{$loop -> index+1 }}
                        </td>
                        <td>
                            {{$location->name }}
                        </td>
                        <td>
                            <!-- <a class="btn btn-xs btn-primary" href="{{ route('admin.Job.show', ['id' => $location->id]) }}">
                                {{ trans('global.view') }}
                            </a> -->
                            <a class="btn btn-xs btn-info" href="{{ route('admin.Location.edit', ['id' => $location->id]) }}">
                                {{ trans('global.edit') }}
                            </a>
                            <a href="{{ route('admin.Location.destroy', ['id' => $location->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')">
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

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('admin.Hirings.create') }}">
            Create Hiring Process
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Job Hiring Process List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th style="width: 15px;">
                            No.
                        </th>
                        <th>
                            Hiring Process name
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hirings as $hiring)
                    <tr>
                        <td>
                            {{$loop -> index+1 }}
                        </td>
                        <td>
                            {{$hiring->name }}
                        </td>
                        <td>
                            <!-- <a class="btn btn-xs btn-primary" href="{{ route('admin.Job.show', ['id' => $hiring->id]) }}">
                                {{ trans('global.view') }}
                            </a> -->
                            <a class="btn btn-xs btn-info" href="{{ route('admin.Hirings.edit', ['id' => $hiring->id]) }}">
                                {{ trans('global.edit') }}
                            </a>
                            <a href="{{ route('admin.Hirings.destroy', ['id' => $hiring->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')">
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

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('admin.Types.create') }}">
            Create Job Types
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Job Types Liat
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th style="width: 15px;">
                            No.
                        </th>
                        <th>
                            Job Types Name
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($types as $type)
                    <tr>
                        <td>
                            {{$loop -> index+1 }}
                        </td>
                        <td>
                            {{$type->name }}
                        </td>
                        <td>
                            <!-- <a class="btn btn-xs btn-primary" href="{{ route('admin.Job.show', ['id' => $type->id]) }}">
                                {{ trans('global.view') }}
                            </a> -->
                            <a class="btn btn-xs btn-info" href="{{ route('admin.Types.edit', ['id' => $type->id]) }}">
                                {{ trans('global.edit') }}
                            </a>
                            <a href="{{ route('admin.Types.destroy', ['id' => $type->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')">
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

@endSection