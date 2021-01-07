@extends('layouts.topnav')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <div class="w3-quarter">
            <img src="{{ asset('slideshow/customer.png')}}" alt="Sandwich" style="width:100%">
            <br><br>
            <br><br>
            <br>
            <h3>Customer Engineer (Data Management)</h3>
            <br>
            <p>1. Accountability and judgment of customer complaints;</p>
            <p>2. Supervise the responsible department to formulate preventive;</p>
            <p>3. Regularly provide data for department leaders to establish a group</p>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('slideshow/supervisor.jpg')}}" alt="Steak" style="width:100%">
            <h3>Compensation and Benefits Supervisor</h3>
            <br>
            <p>1. Proficiency in human resources professional performance, salary and benefits and other fields;</p>
            <p>2. Master the salary design method, understand the modern enterprise salary</p>
            <p>3. Being upright, loyal and trustworthy, rigorous in work, and strong in confidentiality.</p>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('slideshow/manager.jpg')}}" alt="Cherries" style="width:100%">
            <br><br>
            <br><br>
            <h3>Finance Project Manager (PMO)</h3>
            <br>
            <p>1. Fully responsible for the daily management of the Finance Department;</p>
            <p>2. Organize and formulate financial management systems and related regulations, and supervise their implementation;</p>
            <p>3. Formulate, maintain and improve the company's financial management procedures and policies</p>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('slideshow/software.jpg')}}" alt="Pasta and Wine" style="width:100%">
            <br><br>
            <br><br>
            <br><br>
            <h3>Senior Software Engineer - Data Management</h3>
            <br>
            <p>1. Independently undertake project software development;</p>
            <p>2. Participate in the overall planning and implementation of the project;</p>
            <p>3. Responsible for joint customer surveys with project managers, business process analysis and design;</p>
        </div>
    </div>
    <hr style="background-color: black; height: 1px; border: none;">
    <a href="{{ route('admin.Job.create') }}"><button>Click There and submit Your Resume</button></a>
    <!-- End page content -->
</div>

@endsection
    
