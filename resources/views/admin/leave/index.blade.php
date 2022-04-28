@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Leave List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th style="width: 50px">
                            No.
                        </th>
                        <th style="width: 150px">
                            Employee name
                        </th>
                        <th style="width: 150px">
                            Leave type
                        </th>
                        <th style="width: 150px">
                            Date from
                        </th>
                        <th style="width: 150px">
                            Date to
                        </th>
                        <th style="width: 90px">
                            Number of days
                        </th>
                        <th style="width: 300px">
                            Reason
                        </th>
                        <th style="width: 150px">
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
                            {{$leave->employee_name}}
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
                                    <input type="hidden" name="employee_email" value="{{$leave->employee_id}}">
                                    <button type="submit" class="btn btn-xs btn-primary" value="1" name="approved" onclick="return confirm('Are you sure want to approve leave?')">Approve</button>
                                </form>
                                <form action="{{ route('user.leave.reject', ['id' => $leave->id]) }}" method="get">
                                    <input type="hidden" name="employee_email" value="{{$leave->employee_id}}">
                                    <button type="submit" class="btn btn-xs btn-danger" value="2" name="reject" onclick="return confirm('Are you sure want to reject leave?')">Reject</button>
                                </form>
                            @elseif($leave->is_approved == 1)
                                <form action="{{ route('user.leave.reject', ['id' => $leave->id]) }}" method="get">
                                    <input type="hidden" name="employee_email" value="{{$leave->employee_id}}">
                                    <button type="submit" class="btn btn-xs btn-danger" value="2" name="reject" onclick="return confirm('Are you sure want to reject leave?')">Reject</button>
                                </form>
                            @else
                                <form action="{{ route('user.leave.approved', ['id' => $leave->id]) }}" method="get">
                                    <input type="hidden" name="employee_email" value="{{$leave->employee_id}}">
                                    <button type="submit" class="btn btn-xs btn-primary" value="1" name="approved" onclick="return confirm('Are you sure want to approve leave?')">Approve</button>
                                </form>
                            @endif
                        </td>
                        <td style="width: 100px">
                            @if($leave->is_approved == null)
                                <span class="badge badge-pill badge-warning" style="width: 70px;">Pending</span>
                            @elseif($leave->is_approved == 1)
                                <span class="badge badge-pill badge-success" style="width: 70px;">Approved</span>
                                <!-- <form action="{{ route('user.leave.delete', ['id' => $leave->id]) }}" method="get" style="width: 70px;">
                                    <button type="submit" class="badge badge-pill badge-danger" value="1" name="approved" onclick="return confirm('Are you sure want to delete leave?')">Delete</button>
                                </form> -->
                            @else
                                <span class="badge badge-pill badge-danger" style="width: 70px;">Rejected</span>
                                <!-- <form action="{{ route('user.leave.delete', ['id' => $leave->id]) }}" method="get" style="width: 70px;">
                                    <button type="submit" class="badge badge-pill badge-danger" value="1" name="approved" onclick="return confirm('Are you sure want to delete leave?')">Delete</button>
                                </form> -->
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