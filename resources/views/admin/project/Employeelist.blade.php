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
                        <tr>
                            <td>
                                {{ $loop->index+1 }}
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
                            @if($project->employeeID != Auth::user()->id)
                                <form action="{{ route('admin.Project.Enroll')}}" method="post">
                                @csrf
                                    <input type="hidden" name="employee_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                                    <button type="submit" class="btn btn-xs btn-success">
                                        Enroll Me
                                    </button>
                                </form>
                            @elseif($project->employeeID == Auth::user()->id)
                                <span class="badge badge-pill badge-success">Already Enroll</span>
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