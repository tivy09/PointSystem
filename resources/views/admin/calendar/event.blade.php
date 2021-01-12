<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home Pages🏠</title>
    <link rel="icon" href="{{ asset('WebImg/Icon.ico') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/clock.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/todolist.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/email.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/model.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hide.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Evaluation.css') }}" rel="stylesheet">
    <script src="{{ asset('js/email.js')}}"></script>
    <script src="{{ asset('js/clock.js')}}"></script>
    <script src="{{ asset('js/leave.js')}}"></script>
    <script src="{{ asset('js/model.js') }}" defer></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

    @yield('styles')
    <script>
        @if(Session::has('success'))
        toastr.success('{{ Session::get('success')}}')
        @endif
    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show" style="width: 27px">
            <span class="navbar-toggler-icon"></span>
        </button> @if(Session::has('success'))
        <div class="alert alert-success" role="alert" style="margin-top: 0px;margin-bottom: 0px;">
            {{ Session::get('success')}}
        </div>
        @endif
        <ul class="nav navbar-nav ml-auto">
            @if(count(config('panel.available_languages', [])) > 1)
            <li class="nav-item dropdown d-md-down-none">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @foreach(config('panel.available_languages') as $langLocale => $langName)
                    <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a> @endforeach
                </div>
            </li>
            @endif
        </ul>

        <ul class="navbar-nav ml-auto dropdown">
            <button onclick="dropdownLogout()" class="dropbtn">
                {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
            </button>

            <div id="myDropdown" class="dropdown-content">
                <a href="{{ route('user.information.show', ['id' => Auth::user()->id]) }}" class="nav-link" style="padding-left: 10px;">
                    <i class="nav-icon fas fa-fw">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                        <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </i> Information
                </a>
                <a href="{{ url('/') }}" class="nav-link" style="padding-left: 10px;" onclick="">
                    <img src="{{ asset('Icon/house-fill.svg') }}" alt="" class="nav-icon fas fa-fw"> Home
                </a>
                <a href="" class="nav-link" style="padding-left: 10px;" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>{{ trans('global.logout') }}
                </a>
            </div>
            <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function dropdownLogout() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
            <!-- {{ Auth::user()->email }} -->
        </ul>
    </header>
    
    <div class="app-body">
        @include('partials.menu')
        <main class="main">
            <div style="padding-top: 20px" class="container-fluid">
                @if(session('message'))
                <div class="row mb-2">
                    <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    </div>
                </div>
                @endif @if($errors->count() > 0)
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif 
            </div>
        </main>
    </div>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    @yield('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <style>
        .fc, .fc-ltr, .fc-unthemed{
            width: 1000px;
            margin-left:230px;
        }
        .fc-time, .fc-title{
            color: white;
        }
        .fc-axis, .fc-widget-content{
            color: black;
        }
    </style>
    <div class="Eventclock">
        <canvas id="canvas" width="200" height="200" style="background-color:#e5e5e6"></canvas>
        <h2 style="padding-left: 40px;"><p id="demo"></p></h2>
        <h2 style="padding-left: 40px;">Today Day: <p id="demo1"></p></h2>
    </div>
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

    <div class="model-position">
        <a onclick="document.getElementById('id01').style.display = 'block';">
            <model-viewer id="model" src="{{ asset('model/RobotExpressive.glb') }}" alt="A 3D model of an astronaut" animation-name="none" style="width: 200px; height: 220px;" autoplay></model-viewer>
        </a>
    </div>
    <div id="id01" class="modal">
        <div class="modal-content animate">
            <div class="modalcontainer">
                <label for="Search"><b>Search Somethings</b></label>
                <input type="text" id="keyword" placeholder="like Email, Job Salary Calculate and so.....">
                <input type="hidden" id="userid" value="{{ Auth::user()->id }}">
                <button type="button" onclick="loading()">Search</button>
                <div>
                    <p style="text-decoration: underline;">Recommended Option</p>
                    <a onclick="createProject()" class="button3" style="color: #fff;">Create Project</a>
                    <a onclick="Manual()" class="button3" style="color: #fff;">User Manual</a>
                    <a onclick="leave()" class="button3" style="color: #fff;">Apply for Vacation</a>
                    <a onclick="salary()" class="button3" style="color: #fff;">Salary</a>
                    <a onclick="email()" class="button3" style="color: #fff;">Email</a>
                </div>
            </div>
        </div>
    </div>
    <div id="id04" class="modal"">
        <div class="modal-content animate">
            <div class="modalcontainer">
                <model-viewer id="model" src="{{ asset('model/RobotExpressive.glb') }}" alt="A 3D model of an astronaut" animation-name="Running" style="width: 400px; height: 400px;margin-left: 25px;" autoplay></model-viewer>
                <p style="margin-left: 180px; font-size: 25px;">Loading...</p>
            </div>
        </div>
    </div>
    <div id="id02" class="modal">
        <div class="modal-content animate">
            <div class="modalcontainer">
                <label for="result"><b>Result</b></label>
                <p>Nothings, Maybe You can try the botton at the below.😁</p>
            </div>
        </div>
    </div>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
<script>
var d = new Date();
var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
document.getElementById("demo").innerHTML = days[d.getDay()];

var today = new Date();
var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
document.getElementById("demo1").innerHTML = date;

var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
    drawFace(ctx, radius);
    drawNumbers(ctx, radius);
    drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
    var grad;
    ctx.beginPath();
    ctx.arc(0, 0, radius, 0, 2 * Math.PI);
    ctx.fillStyle = 'white';
    ctx.fill();
    grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);
    grad.addColorStop(0, '#333');
    grad.addColorStop(0.5, 'white');
    grad.addColorStop(1, '#333');
    ctx.strokeStyle = grad;
    ctx.lineWidth = radius * 0.1;
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);
    ctx.fillStyle = '#333';
    ctx.fill();
}

function drawNumbers(ctx, radius) {
    var ang;
    var num;
    ctx.font = radius * 0.15 + "px arial";
    ctx.textBaseline = "middle";
    ctx.textAlign = "center";
    for (num = 1; num < 13; num++) {
        ang = num * Math.PI / 6;
        ctx.rotate(ang);
        ctx.translate(0, -radius * 0.85);
        ctx.rotate(-ang);
        ctx.fillText(num.toString(), 0, 0);
        ctx.rotate(ang);
        ctx.translate(0, radius * 0.85);
        ctx.rotate(-ang);
    }
}

function drawTime(ctx, radius) {
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour = hour % 12;
    hour = (hour * Math.PI / 6) +
        (minute * Math.PI / (6 * 60)) +
        (second * Math.PI / (360 * 60));
    drawHand(ctx, hour, radius * 0.5, radius * 0.07);
    //minute
    minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
    drawHand(ctx, minute, radius * 0.8, radius * 0.07);
    // second
    second = (second * Math.PI / 30);
    drawHand(ctx, second, radius * 0.9, radius * 0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0, 0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
</body>

</html>