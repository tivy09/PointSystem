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
                        <th style="width: 250px;">
                            Description
                        </th>
                        <th style="width: 150px;">
                            Number Of the Member
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
                                {{ $project->Name }}
                            </td>
                            <td>
                                {{ $project->username }}
                            </td>
                            <td>
                                {{ $project->Description }}
                            </td>
                            <td>
                                {{ $project->NumberofMember }}
                            </td>
                            <td style="width: 150px;">
                            @if($project->NumberofMember == 0)
                                <span class="badge badge-pill badge-success">The Project is full</span>
                            @elseif($count == $project->id)
                                <span class="badge badge-pill badge-success">Already Enroll</span>
                            @elseif($count != $project->id)
                                <form action="{{ route('admin.Project.enrollProjectList') }}" method="post">
                                @csrf
                                    <input type="hidden" name="employee_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                                    <button type="submit" class="btn btn-xs btn-success">
                                        Enroll Me
                                    </button>
                                </form>
                            
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