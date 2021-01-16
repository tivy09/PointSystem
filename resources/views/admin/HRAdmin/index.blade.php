@extends('layouts.admin')
@section('content')
@php 
    $current = date('Y-m-d');
@endphp
<div class="card">
    <div class="card-header">
        Training Plan List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Role">
                <thead>
                    <tr>
                        <th width="10">
                            No.
                        </th>
                        <th>
                            Employee
                        </th>
                        <th>
                            Projects that employees are responsible
                        </th>
                        <th>
                            Task Name
                        </th>
                        <th>
                            Total Mark
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evas as $eva)
                        <tr>
                            <td>
                                {{ $loop -> index+1 }}
                            </td>
                            <td>
                                {{ $eva->employee_name }}
                            </td>
                            <td>
                                {{ $eva->project_name }}
                            </td>
                            <td>
                                {{ $eva->taskname }}
                            </td>
                            <td>
                                {{ $eva->TotalScore }}
                            </td>
                            <td>
                                @if($eva->TotalScore2 > 1)
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.Project.EvaluationAdminShow', ['id' => $eva->id]) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                    <a class="btn btn-xs btn-danger" href="{{ route('admin.Project.EvaluationAdminDelete', ['id' => $eva->id]) }}" onclick="return confirm('Sure Want Delete?')">
                                        {{ trans('global.delete') }}
                                    </a>
                                    <span class="badge badge-pill badge-warning">Already Score</span>
                                @elseif($eva->status == null && $eva->TrainPlan > 1)
                                    <a class="btn btn-xs btn-danger" href="{{ route('admin.Project.EvaluationAdminDelete', ['id' => $eva->id]) }}" onclick="return confirm('Sure Want Delete?')">
                                        {{ trans('global.delete') }}
                                    </a>
                                    <span class="badge badge-pill badge-warning">Unfinished</span>
                                @elseif($eva->status == 1)
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.Project.EvaluationAdminShowTopic', ['id' => $eva->id]) }}">
                                        Marking Score
                                    </a>
                                    <span class="badge badge-pill badge-success">Already Finished</span>
                                @elseif($eva->status ==null)
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.Project.EvaluationAdminShow', ['id' => $eva->id]) }}">
                                        {{ trans('global.view') }}
                                    </a>

                                    <a class="btn btn-xs btn-danger" href="{{ route('admin.Project.EvaluationAdminDelete', ['id' => $eva->id]) }}" onclick="return confirm('Sure Want Delete?')">
                                        {{ trans('global.delete') }}
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