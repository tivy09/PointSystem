@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Evaluation List
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
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.Project.EvaluationAdminShow', ['id' => $eva->id]) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-danger" href="" onclick="return confirm('Sure Want Delete?')">
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