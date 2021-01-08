@extends('layouts.topnav')
@section('content')

<div class="piechart">
    @if (Route::has('login'))
        <a href="#" onclick="Manual()" style="color: black;">User Manual</a>
            @auth
                <a href="#" onclick="dashboard()" class="margin" style="color: black;">Dashboard</a>
                <a href="#" onclick="company()" class="margin" style="color: black;">Company Controller</a>
                <a href="#" onclick="user()" class="margin" style="color: black;">User Managment</a>
                <a href="#" onclick="project()" class="margin" style="color: black;">Project</a>
                <a href="#" onclick="calender()" class="margin" style="color: black;">Calendar</a>
                <a href="#" onclick="checkin()" class="margin" style="color: black;">Check In</a>
                <a href="#" onclick="leave()" class="margin" style="color: black;">Leave</a>
                <a href="#" onclick="salary()" class="margin" style="color: black;">Salary</a>
                <a href="#" onclick="email()" class="margin" style="color: black;">Email</a>
                <a href="#" onclick="information()" class="margin" style="color: black;">Personal Information</a>
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
                <p>1. Interviewers can check the brief introduction of job interview here.</p>
                <p>2. User instruction manual</p>
                <p>3. About the company's sales records in recent years</p>
                <p>4. Company employee account login</p>
                <p>5. Small robots. I can take you where you want to go</p>
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
                <p>1. About the positions needed by the company</p>
                <p>2. Apply for an interview</p>
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
                <p>1. The first one on the left is the contribution to the orders of users of all ages, the middle one is the total sales of the year, and the first one is the orders of different channels</p>
                <p>2. The year corresponding to the icon</p>
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
                <p>1. employee registration email</p>
                <p>2. Employee account password</p>
                <p>3. Login button</p>
                <p>4. When employees forget their passwords, they can come here to verify and modify them.</p>
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
                <p>1. user home page</p>
                <p>2. User management function (for administrators only)</p>
                <p>3. Company controller (only for manager)</p>
                <p>4. Project management function</p>
                <p>5. Calendar (record items)</p>
                <p>6. User sign-in</p>
                <p>7. User holiday list (for manager only)</p>
                <p>8. Employee salary adjustment table</p>
                <p>9. E-mail function</p>
                <p>10. logout</p>
                <p>11. news billboard</p>
                <p>12. To-do list</p>
                <p>13. To-do history</p>
                <p>14. Personal information</p>
                <p>15. the company home page</p>
                <p>16. logout</p>
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
                <p>1. List of total employees of the company</p>
                <p>2. Customize permissions</p>
                <p>3. Authorization</p>
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
                <p>1. the project list, Action has two forms. Managers can create tasks for employees. Watch the progress of the project. When you click Delete, "Project is over" will be displayed, and the manager can choose whether to delete the project record or not. (only for managers)</p>
                <p>2. Employee evaluation function (for manager only)</p>
                <p>3. Employee registration project function (only for employees)</p>
                <p>4. Employee selection task function (only for employees)</p>
            </div>
        </div>
        <br>
    </div>
    <div id="div8" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Calendar</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/Clendar.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. Calendar</p>
                <p>2. Calendar selection function</p>
                <p>3. Create event function (for manager only)</p>
                <p>4. Current time and date</p>
                <p>5. The left arrow is to go back to last month, and the right arrow is to go to next month</p>
                <p>6. Three modes: month, week and day. The current mode is month</p>
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
                <p>1. The user's avatar is displayed. Users must keep their hands in a bright place and keep their heads in the center.</p>
                <p>2. If the user clicks, a photo will be taken. System for processing.</p>
                <p>3. Current time and date</p>
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
                <p>1. employee leave list. Managers can choose to approve or reject. When the manager chooses, the system will automatically send an email to the employee.</p>
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
                <p>1. Salary adjustment table of employees. Managers or personnel department employees can adjust the salary of each employee here, and can also view the salary details of each employee.</p>
            </div>
        </div>
        <br>
    </div>
    <div id="div12" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Email</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/email.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. Users can send emails to any employees of the company by themselves</p>
                <p>2. Email Inbox</p>
                <p>3. Email details</p>
                <p>4. Users can decide to delete e-mails.</p>
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
                <p>1. department list, Action is to see the number of departments, modify department data and delete departments</p>
                <p>2. List of interviewers</p>
                <p>3. Work customization function</p>
            </div>
        </div>
        <br>
    </div>
    <div id="div14" class="background" style="display: none;">
        <h3 style="padding-top: 13px;margin-left: 850px;text-decoration: underline;">Personal Information</h3>
        <br>
        <div class="row">
            <div style="" class="col-sm-8">
                <img src="{{ asset('manual/information.png')}}" style="margin-left: 20px;" alt="" width="100%">
            </div>
            <div class="col-sm-4">
                <p>1. Basic information of users</p>
                <p>2. Details of users</p>
                <p>3. User's salary details</p>
                <p>4. The user can choose to change the avatar</p>
                <p>5. Users apply for holidays</p>
            </div>
        </div>
        <br>
    </div>
</div>
@endsection