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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/todolist.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/linenumber.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/email.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/model.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hide.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Evaluation.css') }}" rel="stylesheet">
    <script src="{{ asset('js/email.js')}}"></script>
    <script src="{{ asset('js/leave.js')}}"></script>
    <script src="{{ asset('js/model.js') }}" defer></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    

    @yield('styles')
    <script>
        @if(Session::has('success'))
            toastr.success('{{ Session::get('success')}}')
        @endif

        function load() {
            if (confirm("You can read the user manual, which will make it easy for you to understand the system operation. You want to go?")) {
                location.href = 'http://localhost:8000/UserManual';
            } else {}robot
        }
    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show" style="width: 27px; margin-bottom: 14px;">
            <span class="navbar-toggler-icon"></span>
        </button>
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
                <!-- <a href="{{ url('/') }}" class="nav-link" style="padding-left: 10px;" onclick="">
                    <img src="{{ asset('Icon/house-fill.svg') }}" alt="" class="nav-icon fas fa-fw"> About Us
                </a> -->
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
                @yield('content')
            </div>
        </main>
        <div>
            <div class="model-position">
                <!-- <a onclick="document.getElementById('id01').style.display = 'block';">
                    <model-viewer id="model" src="{{ asset('model/RobotExpressive.glb') }}" alt="A 3D model of an astronaut" animation-name="none" style="width: 150px; height: 170px;" autoplay></model-viewer>
                </a>
             -->
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
                            @can('project_manager')
                            <a onclick="createProjectrobot()" class="button3" style="color: #fff;">Create Project</a>
                            @endcan
                            <a onclick="Manualrobot()" class="button3" style="color: #fff;">User Manual</a>
                            <a onclick="leaverobot()" class="button3" style="color: #fff;">Apply for Vacation</a>
                            <a onclick="salaryrobot()" class="button3" style="color: #fff;">Salary</a>
                            <a onclick="emailrobot()" class="button3" style="color: #fff;">Email</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="id04" class="modal">
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
        </div>
    </div>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    
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
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

</body>

</html>