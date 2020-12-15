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
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>

                    <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
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
                        <button type="button" onclick="loading()">Search</button>
                    </div>
                </div>
            </div>
            <div id="id02" class="modal">
                <div class="modal-content animate">
                    <div class="modalcontainer">
                        <label for="result"><b>Result</b></label>
                        <p>Nothings</p>
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
