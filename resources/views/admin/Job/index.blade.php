@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Apply Job List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th>
                            No.
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Age
                        </th>
                        <th>
                            Interview Position
                        </th>
                        <th>
                            Action
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td>
                            {{ $loop->index+1 }}
                        </td>
                        <td>
                            {{ $job->name }}
                        </td>
                        <td>
                            {{ $job->age }}
                        </td>
                        <td>
                            {{ $job->PosiName }}
                        </td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.Job.show', ['id' => $job->id]) }}">
                                {{ trans('global.view') }}
                            </a>

                            <a class="btn btn-xs btn-danger" href="{{ route('admin.Job.destroy', ['id' => $job->id]) }}" onclick="return confirm('Sure Want Delete?')">
                                {{ trans('global.delete') }}
                            </a>
                        </td>
                        <td>
                            @if($job->is_approved == null)
                                <span class="badge badge-pill badge-warning">Pending</span>
                            @elseif($job->is_approved == 1)
                                <span class="badge badge-pill badge-danger">Rejected</span>
                            @elseif($job->is_approved >= 2)
                                <span class="badge badge-pill badge-success">{{ $job->HiriName }}</span>
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
