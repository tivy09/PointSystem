<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>🎉Company Information🎉</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="icon" href="{{ asset('WebImg/Icon.ico') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/chartindex.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/model.css') }}" rel="stylesheet">
    <script src="{{ asset('js/model.js') }}" defer></script>
    <script src="{{ asset('js/chart.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page" style="background-color: #e5e5e6;">

    <div class="flex-center position-ref">
        <div class="top-left links">
            <a href="{{ url('/')}}" style="font-family: 'Nunito', sans-serif">Final Year Project</a>
        </div>
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/CompanyChart')}}" style="font-family: 'Nunito', sans-serif">Company Chart</a>

                    <a href="{{ url('/UserManual')}}" style="font-family: 'Nunito', sans-serif">User Manual</a>

                    <a href="{{ url('/home') }}" style="font-family: 'Nunito', sans-serif">Home</a>
                @else
                    <a href="{{ url('/JobList') }}" style="font-family: 'Nunito', sans-serif">Job Apply</a>

                    <a href="{{ url('/UserManual')}}" style="font-family: 'Nunito', sans-serif">User Manual</a>

                    <a href="{{ url('/CompanyChart')}}" style="font-family: 'Nunito', sans-serif">Company Chart</a>

                    <a href="{{ route('login') }}" style="font-family: 'Nunito', sans-serif">Login</a>
                @endauth
            </div>
        @endif
    </div>


    <div>
        <div class="model-position">
            <a onclick="document.getElementById('id01').style.display = 'block';">
                <model-viewer id="model" src="{{ asset('model/RobotExpressive.glb') }}" alt="A 3D model of an astronaut" animation-name="none" style="width: 200px; height: 220px;" autoplay></model-viewer>
            </a>
        </div>
        <div id="id01" class="modal">
            <div class="modal-content animate">
                <div class="modalcontainer">
                    <label for="Search"><b>Search Somethings</b></label>
                    <input type="text" id="keyword" placeholder="like Email, Job Salary Calculate and so....."> @guest
                    <input type="hidden" id="userid" value="0"> @else
                    <input type="hidden" id="userid" value="{{ Auth::user()->id }}"> @endguest
                    <button type="button" onclick="loading()">Search</button>
                    <div>
                        <p style="text-decoration: underline;">Recommended Option</p>
                        <!-- No Login -->
                        @guest
                        <a onclick="Loginrobot()" class="button3" style="color: #fff;">Login</a>
                        <a onclick="Manualrobot()" class="button3" style="color: #fff;">User Manual</a>
                        <a onclick="Homerobot()" class="button3" style="color: #fff;">Home Pages</a>
                        <!-- After Login -->
                        @else
                        <a onclick="dashboardrobot()" class="button3" style="color: #fff;">Dashboard</a>
                        <a onclick="createProjectrobot()" class="button3" style="color: #fff;">Create Project</a>
                        <a onclick="Manualrobot()" class="button3" style="color: #fff;">User Manual</a>
                        <a onclick="leaverobot()" class="button3" style="color: #fff;">Apply for Vacation</a>
                        <a onclick="salaryrobot()" class="button3" style="color: #fff;">Salary</a>
                        <a onclick="emailrobot()" class="button3" style="color: #fff;">Email</a> @endguest
                    </div>
                </div>
            </div>
        </div>
        <div id="id04" class="modal" ">
                    <div class="modal-content animate ">
                        <div class="modalcontainer ">
                            <model-viewer id="model " src="{{ asset( 'model/RobotExpressive.glb') }} " alt="A 3D model of an astronaut " animation-name="Running" style="width: 400px; height: 400px;margin-left: 25px; " autoplay></model-viewer>
                            <p style="margin-left: 180px; font-size: 25px; ">Loading...</p>
                        </div>
                    </div>
                </div>
                <div id="id02 " class="modal ">
                    <div class="modal-content animate ">
                        <div class="modalcontainer ">
                            <label for="result "><b>Result</b></label>
                            <p>Nothings, Maybe You can try the botton at the below.😁</p>
                        </div>
                    </div>
                </div>
            </div>

        @yield("content")
    </body>
</html>