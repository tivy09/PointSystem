@extends('layouts.admin')
@section('content')

@php

$string1 = rand(1, 5);
$string2 = rand(5, 15);
$string3 = rand(1, 3);
$string4 = rand(18, 45);

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
<div class="container">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5" style="background-color: white;right: 30px;">
                <h3 style="margin-left: 82px;margin-top: 10px;">PROFESSIONAL DETAILS</h3>
                <img src="{{ asset('Avatar/')}}/{{ $user->Avater }}" alt="" class="img-fluid avatar">
                <br>
                <table style="margin-top: 20px;">
                    <tr>
                        <td style="width: 200px;height: 50px; font-size: 25px;"><b>NAME</b></td>
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
            <div class="col-sm-7" style="background-color: chartreuse;">
                <h2 style="margin-left: 20px;margin-top: 15px;">ABOUT ME</h2>
                <hr>
                <table style="margin-top: 20px;">
                    <tr>
                        <td style="width: 200px;height: 90px; font-size: 25px;"><b>NAME</b></td>
                        <td style="font-size: 25px;">{{$user->name}}</td>
                        <td style="width: 150px;height: 90px; font-size: 25px;padding-left: 30px;"><b>AGE</b></td>
                        <td style="font-size: 25px;">{{$string4}} Years</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;height: 90px; font-size: 25px;"><b>LOCATION</b></td>
                        <td style="font-size: 25px;">{{$location}}</td>
                        <td style="width: 150px;height: 90px; font-size: 25px;padding-left: 30px;"><b>EXPERIENCE</b></td>
                        <td style="font-size: 25px;">{{$string2}} Years</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;height: 90px; font-size: 25px;"><b>LEVEL</b></td>
                        <td style="font-size: 25px;">{{$level}}</td>
                        <td style="width: 150px;height: 90px; font-size: 25px;padding-left: 30px;"><b>CAREER LEVEL</b></td>
                        <td style="font-size: 25px;">{{$string4}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;height: 90px; font-size: 25px;"><b>EMAIL</b></td>
                        <td style="font-size: 25px;">{{$user->email}}</td>
                        <td style="width: 150px;height: 90px; font-size: 25px;padding-left: 30px;"><b>WEBSITE</b></td>
                        <td style="font-size: 25px;">emample.com</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection