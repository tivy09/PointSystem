@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("user.leave.create") }}">
            Apply Leave
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Leave List
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
                            Employee name
                        </th>
                        <th>
                            Leave type
                        </th>
                        <th>
                            Date from
                        </th>
                        <th>
                            Date to
                        </th>
                        <th>
                            Number of days
                        </th>
                        <th>
                            Reason
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
                    @foreach($Leave as $leave)
                    <tr>
                        <td>
                            {{$loop -> index+1 }}
                        </td>
                        <td>
                            {{$leave->employee_name }}
                        </td>
                        <td>
                            {{$leave->leave_type}}
                        </td>
                        <td>
                            {{$leave->date_from}}
                        </td>
                        <td>
                            {{$leave->date_to}}
                        </td>
                        <td>
                            {{$leave->days}}
                        </td>
                        <td>
                            {{$leave->reason}}
                        </td>
                        <td>
                            @if($leave->is_approved == null)
                                <form action="{{ route('user.leave.approved', ['id' => $leave->id]) }}" method="get">
                                    <button type="submit" class="btn btn-xs btn-primary" value="1" name="approved" onclick="return confirm('Are you sure want to approve leave?')">Approve</button>
                                </form>
                                <form action="{{ route('user.leave.reject', ['id' => $leave->id]) }}" method="get">
                                    <button type="submit" class="btn btn-xs btn-danger" value="2" name="reject" onclick="return confirm('Are you sure want to reject leave?')">Reject</button>
                                </form>
                            @elseif($leave->is_approved == 1)
                                <form action="{{ route('user.leave.reject', ['id' => $leave->id]) }}" method="get">
                                    <button type="submit" class="btn btn-xs btn-danger" value="2" name="reject" onclick="return confirm('Are you sure want to reject leave?')">Reject</button>
                                </form>
                            @else
                                <form action="{{ route('user.leave.approved', ['id' => $leave->id]) }}" method="get">
                                    <button type="submit" class="btn btn-xs btn-primary" value="1" name="approved" onclick="return confirm('Are you sure want to approve leave?')">Approve</button>
                                </form>
                            @endif
                        </td>
                        <td>
                            @if($leave->is_approved == null)
                                <span class="badge badge-pill badge-warning">Pending</span>
                            @elseif($leave->is_approved == 1)
                                <span class="badge badge-pill badge-success">Approved</span>
                            @else
                                <span class="badge badge-pill badge-danger">Rejected</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>

@endSection