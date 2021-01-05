<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link href="{{ asset('css/email.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/model.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hide.css') }}" rel="stylesheet">
    <script src="{{ asset('js/email.js')}}"></script>
    <script src="{{ asset('js/leave.js')}}"></script>
    <script src="{{ asset('js/model.js') }}" defer></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    <title>Laravel</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
    <div>
        <div class="model-position">
            <a onclick="document.getElementById('id01').style.display = 'block';">
                <model-viewer id="model" src="{{ asset('model/RobotExpressive.glb') }}" alt="A 3D model of an astronaut" animation-name="none" style="width: 100px; height: 120px;" autoplay></model-viewer>
            </a>
        </div>
        <div id="id01" class="modal">
            <div class="modal-content animate">
                <div class="modalcontainer">
                    <label for="Search"><b>Search Somethings</b></label>
                    <input type="text" id="keyword" placeholder="like Email, Job Salary Calculate and so.....">
                    @guest
                        <input type="hidden" id="userid" value="0">
                        @else
                        <input type="hidden" id="userid" value="{{ Auth::user()->id }}">
                    @endguest
                    <button type="button" onclick="loading()">Search</button>
                <div>
                    <p style="text-decoration: underline;">Recommended Option</p>
                    <!-- No Login -->
                    @guest
                    <a onclick="Login()" class="button3" style="color: #fff;">Login</a>
                    <a onclick="Manual()" class="button3" style="color: #fff;">User Manual</a>
                    <a onclick="Home()" class="button3" style="color: #fff;">Home Pages</a>
                    <!-- After Login -->
                    @else
                    <a onclick="dashboard()" class="button3" style="color: #fff;">Dashboard</a>
                    <a onclick="createProject()" class="button3" style="color: #fff;">Create Project</a>
                    <a onclick="Manual()" class="button3" style="color: #fff;">User Manual</a>
                    <a onclick="leave()" class="button3" style="color: #fff;">Apply for Vacation</a>
                    <a onclick="salary()" class="button3" style="color: #fff;">Salary</a>
                    <a onclick="email()" class="button3" style="color: #fff;">Email</a>
                    @endguest
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
    </div>
    <div class="app flex-row align-items-center">
        <div class="container">
            @yield("content")
        </div>
    </div>
    @yield('scripts')
</body>

</html>
