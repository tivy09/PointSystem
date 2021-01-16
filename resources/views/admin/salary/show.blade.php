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
                            @if($user->name != 'Admin')
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
                        </tbody>
                    </table>
                    <div class="form-group">
                        <a class="btn btn-default" href="{{ route('user.salary.index') }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endforeach
@endsection