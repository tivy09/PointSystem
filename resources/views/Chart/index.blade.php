<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>🎉Company Chart🎉</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="icon" href="{{ asset('WebImg/Icon.ico') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/chartindex.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/model.css') }}" rel="stylesheet">
        <script src="{{ asset('js/model.js') }}" defer></script>
        <script src="{{ asset('js/chart.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    </head>
        <body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page" style="background-color: #e5e5e6;">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <b class="navbar-brand">
                        Company Chart
                    </b>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('home') }}">
                                            {{ trans('global.dashboard') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
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
        

        <div class="piechart">
            <a href="#" onclick="JanuaryPie()" style="color: black;">2018</a>
            <a href="#" onclick="FebruaryPie()" class="margin" style="color: black;">2019</a>
            <a href="#" onclick="MarchPie()" class="margin" style="color: black;">2020</a>
        </div>
        <br><br>
        <div id="myDIV1" style="display: block; position: relative; height:60vh; width:95vw; margin-top: 20px;">
            <div class="row">
                <div class="col-sm-4"><canvas id="piechart1" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="linchart1" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="barchart1" width="400" height="400" style="background-color: white"></canvas></div>
            </div>
        </div>
        <div id="myDIV2" style="display: none; position: relative; height:60vh; width:95vw; margin-top: 20px;">
            <div class="row">
                <div class="col-sm-4"><canvas id="piechart2" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="linchart2" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="barchart2" width="400" height="400" style="background-color: white"></canvas></div>
            </div>
        </div>
        <div id="myDIV3" style="display: none; position: relative; height:60vh; width:95vw; margin-top: 20px;">
            <div class="row">
                <div class="col-sm-4"><canvas id="piechart3" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="linchart3" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="barchart3" width="400" height="400" style="background-color: white"></canvas></div>
            </div>
        </div>
</body>
</html>
