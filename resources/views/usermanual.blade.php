@extends('layouts.topnav')
@section('content')

<div class="piechart">
    @if (Route::has('login'))
        <a href="#" onclick="Manual()" style="color: black;">User Manual</a>
            @auth
                <a href="#" onclick="dashboard()" class="margin" style="color: black;">Dashboard</a>
                <a href="#" onclick="company()" class="margin" style="color: black;">Compnay Controller</a>
                <a href="#" onclick="user()" class="margin" style="color: black;">User Managment</a>
                <a href="#" onclick="project()" class="margin" style="color: black;">Project</a>
                <a href="#" onclick="calender()" class="margin" style="color: black;">Calender</a>
                <a href="#" onclick="checkin()" class="margin" style="color: black;">Check In</a>
                <a href="#" onclick="leave()" class="margin" style="color: black;">Leave</a>
                <a href="#" onclick="salary()" class="margin" style="color: black;">Salary</a>
                <a href="#" onclick="email()" class="margin" style="color: black;">Email</a>
            @else
                <a href="#" onclick="job()" class="margin" style="color: black;">Job Apply</a>
                <a href="#" onclick="chart()" class="margin" style="color: black;">Company Chart</a>
                <a href="#" onclick="login()" class="margin" style="color: black;">Login</a>
            @endauth
    @endif
    
    
</div>

<br><br>
<br><br>

<div class="container-fluid">
    <div id="div1" class="background">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">User Manual</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/HomePages.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div2" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Job Apply</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/JobApply.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div3" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Company Chart</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/CompanyChart.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div4" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Login</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/Login.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <!-- After Login -->
    <div id="div5" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Dashboard</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/Dashboard.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div6" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">User Management</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/usermanagnement.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div7" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Project</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/Project.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div8" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Calender</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/Clendar.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div9" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Check In</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/checkin.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div10" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Leave</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/leavelist.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div11" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Salary</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/Salary.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div12" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Login</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/Login.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
    <div id="div13" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Company Controller</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/compnay.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
        <br>
    </div>
</div>
@endsection