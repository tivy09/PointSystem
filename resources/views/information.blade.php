@extends('layouts.admin')
@section('content')

@php

$string1 = rand(1, 5);
$string2 = rand(5, 15);
$string3 = rand(1, 3);
$string4 = rand(18, 45);
$string5 = rand(1, 31);

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
    <div class="card-body">
        <div class="row">
            <div style="background-color: white; width: 470px;">
                <h3 style="margin-left: 82px;margin-top: 10px;">PROFESSIONAL DETAILS</h3>
                <hr>
                <img src="{{ asset('Avatar/')}}/{{ $user->Avater }}" alt="" class="img-fluid avatar">
                <br>
                <table class="table" style="margin-top: 20px;">
                    <tr>
                        <td style="width: 200px;height: 50px; font-size: 25px;margin-left: 10px;"><b>NAME</b></td>
                        <td style="font-size: 25px;">{{$user->name}}<br></td>
                    </tr>
                    
                    <tr>
                        <td style="width: 200px;height: 50px; font-size: 25px;"><b>EMAIL</b></td>
                        <td style="font-size: 25px;">{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;height: 50px; font-size: 25px;"><b>LOCATION</b></td>
                        <td style="font-size: 25px;">{{$location}}<br></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;height: 50px; font-size: 25px;"><b>EXPERIENCE</b></td>
                        <td style="font-size: 25px;">{{$string2}} Years<br></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;height: 50px; font-size: 25px;"><b>LEVEL</b></td>
                        <td style="font-size: 25px;">{{$level}}<br></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-7" style="background-color: white;left: 50px;height: 450px;">
                <h2 style="margin-left: 20px;margin-top: 15px;">ABOUT ME</h2>
                <hr>
                <table style="margin-top: 20px;">
                    <tr>
                        <td style="width: 200px;height: 90px; font-size: 25px;"><b>NAME</b></td>
                        <td style="font-size: 25px;">{{$user->name}}</td>
                        <td style="width: 150px;height: 90px; font-size: 25px;padding-left: 30px;"><b>AGE</b></td>
                        <td style="font-size: 25px;padding-left: 60px;">{{$string4}} Years</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;height: 90px; font-size: 25px;"><b>LOCATION</b></td>
                        <td style="font-size: 25px;">{{$location}}</td>
                        <td style="width: 150px;height: 90px; font-size: 25px;padding-left: 30px;"><b>EXPERIENCE</b></td>
                        <td style="font-size: 25px;padding-left: 60px;">{{$string2}} Years</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;height: 90px; font-size: 25px;"><b>LEVEL</b></td>
                        <td style="font-size: 25px;">{{$level}}</td>
                        <td style="width: 200px;height: 90px; font-size: 25px;padding-left: 30px;"><b>CAREER LEVEL</b></td>
                        <td style="font-size: 25px;padding-left: 60px;">{{$level}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;height: 90px; font-size: 25px;"><b>EMAIL</b></td>
                        <td style="font-size: 25px;">{{$user->email}}</td>
                        <td style="width: 150px;height: 90px; font-size: 25px;padding-left: 30px;"><b>WEBSITE</b></td>
                        <td style="font-size: 25px;padding-left: 60px;">emample.com</td>
                    </tr>
                </table>
            </div>
        </div>
@endforeach
<br><br>
@foreach($salaries as $salary)
        @php
            $subtotal = 100 * $leave;
            $User_salary = $salary-> Salary_amount;
            $tax = $User_salary*(6/100); 
            $check = $string5 * 100;
            $total_salary = $User_salary - $tax - $subtotal + $check;
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
                                    {{ $salary-> Salary_amount }}
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 50%">
                                    Employee Check In Day ({{$string5}} Day)
                                </th>
                                <td>
                                    RM {{ $check }}
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 50%">
                                    Employee Leave Apply (One day 10 hours/1 hours RM10)
                                </th>
                                <td>
                                {{ $leave }} days
                                </td>
                            </tr>
                            
                            <tr>
                                <th style="width: 50%">
                                    Tax (6%)
                                </th>
                                <td>
                                    {{ $tax }}
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 50%">
                                    Total Salary
                                </th>
                                <td>
                                    {{ $total_salary }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection