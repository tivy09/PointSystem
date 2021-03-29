@extends('layouts.admin')
@section('content')

@php

// location
$string1 = rand(1, 5);

// EXPERIENCE
$string2 = rand(5, 15);

// level
$string3 = rand(1, 3);

// Age
$string4 = rand(18, 45);

// Check In
$string5 = rand(1, 31);

// Comission Test
$string6 = rand(1, 100);

// Comission Count
$string7 = rand(100, 500);

if($string1 == 1)
    $location = 'Muar';
elseif($string1 == 2)
    $location = 'Johor';
elseif($string1 == 3)
    $location = 'Kedah';
elseif($string1 == 4)
    $location = 'KL';
elseif($string1 == 5)
    $location = 'PJ';

if($string3 == 1)
    $level = 'Degree';
elseif($string3 == 2)
    $level = 'Diploma';
elseif($string3 == 3)
    $level = 'PHD';

@endphp

<style>
    .avatar {
        vertical-align: middle;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        margin-top: 10px;
        margin-left: 59px;
    }
</style>
@foreach($users as $user)
    <div class="card">
        <div class="card-header">
            Personal Information
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr style="text-align: center;">
                    <td rowspan="5"><img src="{{ asset('Avatar/')}}/{{ $user->Avater }}" alt="" width="100%"></td>
                    <td colspan="4" style="text-align: left;">NAME:  {{$user->name}}</td>
                </tr>
                <tr>
                    <td>EMAIL: {{$user->email}}</td>
                </tr>
                <tr>
                    <td>AGE: {{$string4}}</td>
                </tr>
                <tr>
                    <td>EXPERIENCE: {{$string2}} Years</td>
                </tr>
                <tr>
                    <td>LEVEL: {{$level}}</td>
                </tr>
                <tr>
                    <td>LOCATION: {{$location}}</td>
                    <td rowspan="2">
                        <div class="calculate">
                            <div class="inside">
                                <h5>Salary Calculate Formula</h5>
                                <p>Your Basie Salary + (Your Cheak in Day * RM100/day) + (Your Total Comission cases * RM2/case) - (Your Leave * RM100/day) - (6% tax) = Your Total Salary</p>
                                <button onclick="avatar()" style="width: 200px;">Changes Your Avatar</button>
                                @can('Apply_leave_Employee')
                                    <button style="width: 200px;" onclick="leavebutton()">Apply Leave</button>
                                @endcan
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>WEBSITE: Example.com</td>
                </tr>
            </table>
        </div>
    </div>
    <div id="id05" class="modal"">
        <div class="modal-content animate">
            <div class="modalcontainer">
                <form action="{{ route('user.Avatar.update', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="avatar_file" id="avatar_file" onchange="return uploadavater()">
                    <div id="avatarupload"></div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endforeach

<br><br>

@foreach($salaries as $salary)
        @php
            $total_salary = 0;
            // 底薪
            $firstSalary = $salary->Salary_amount;
            // check in
            $checkin = $string5 * 100;
            // leave
            $countleave = $leave * 100;
            // tax
            $counttax = $salary->Salary_amount * 6/100;
            // comission
            $countcomission = $string7 * 2;
            // totalsalary
            if($string6 >= 1 && $string6 <= 50)
                $total_salary = $firstSalary + $countcomission + $checkin - $countleave - $counttax;
            else if($string6 >= 51 && $string6 <= 100)
                $total_salary = $firstSalary + $checkin - $countleave - $counttax;
        @endphp


    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.user.title') }} Salary
        </div>

        <div class="card-body">
            <div class="form-group">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th style="width: 50%">
                                Employee {{ trans('cruds.user.fields.name') }}
                            </th>
                            <td>
                                {{ $user->name }}
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 50%">
                                Employee Position
                            </th>
                            <td>
                                {{ $user->position }}
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 50%">
                                Employee Salary
                            </th>
                            <td>
                                RM  {{ $salary-> Salary_amount }}
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 50%">
                                Employee Check In Day (Total Check in Day: {{$string5}} Day)
                            </th>
                            <td>
                                RM {{ $checkin }} 
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 50%">
                                Employee Leave Apply (One day 10 hours, 1 hours RM10)
                            </th>
                            <td>
                            {{ $leave }} days / Total Leave Price = RM{{$countleave}}
                            </td>
                        </tr>
                        @if($user->name != 'HR Admin')
                            @if($string6 >= 1 && $string6 <= 50)
                                <tr>
                                    <th style="width: 50%">
                                        Sales Comission (Total Cases: {{$string7}} cases,  RM2/case)
                                    </th>
                                    <td>
                                        RM {{ $countcomission }}
                                    </td>
                                </tr>
                            @endif
                        @endif
                        <tr>
                            <th style="width: 50%">
                                    Tax (6%)
                                </th>
                                <td>
                                    RM {{ $counttax }}
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 50%">
                                    Total Salary
                                </th>
                                <td>
                                    RM {{ $total_salary }}
                                </td>
                            </tr>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
@endforeach
@endsection