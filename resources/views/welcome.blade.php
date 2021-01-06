<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/model.css') }}" rel="stylesheet">
        <script src="{{ asset('js/model.js') }}" defer></script>
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/CompanyChart')}}">Company Chart</a>

                        <a href="{{ url('/UserManual')}}">User Manual</a>

                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('admin.Job.create') }}">Job Apply</a>

                        <a href="{{ url('/UserManual')}}">User Manual</a>

                        <a href="{{ url('/CompanyChart')}}">Company Chart</a>

                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        
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
                        <input type="text" id="keyword" placeholder="like Email, Job Salary Calculate and so....."> @guest
                        <input type="hidden" id="userid" value="0"> @else
                        <input type="hidden" id="userid" value="{{ Auth::user()->id }}"> @endguest
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
                            <a onclick="email()" class="button3" style="color: #fff;">Email</a> @endguest
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
    </body>
</html>
