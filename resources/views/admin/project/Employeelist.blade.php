@extends('layouts.admin')
@section('content')
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
                            Description
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        @if($project->employeeID != Auth::user()->id)
                        <tr>
                            <td>
                                {{ $loop -> index+1 }}
                            </td>
                            <td>
                                {{ $project->name }}
                            </td>
                            <td>
                                {{ $project->username }}
                            </td>
                            <td>
                                {{ $project->description }}
                            </td>
                            <td style="width: 150px;">
                                <form action="{{ route('admin.Project.Enroll')}}" method="post">
                                @csrf
                                    <input type="hidden" name="employee_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                                    <button type="submit" class="btn btn-xs btn-success">
                                        Enroll Me
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection