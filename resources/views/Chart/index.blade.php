@extends('layouts.topnav')
@section('content')
<br><br><br>
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
            <br>
            <p style="font-size: 150px;margin-left: 750px;">2018</p>
        </div>
        <div id="myDIV2" style="display: none; position: relative; height:60vh; width:95vw; margin-top: 20px;">
            <div class="row">
                <div class="col-sm-4"><canvas id="piechart2" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="linchart2" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="barchart2" width="400" height="400" style="background-color: white"></canvas></div>
            </div>
            <br>
            <p style="font-size: 150px;margin-left: 750px;">2019</p>
        </div>
        <div id="myDIV3" style="display: none; position: relative; height:60vh; width:95vw; margin-top: 20px;">
            <div class="row">
                <div class="col-sm-4"><canvas id="piechart3" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="linchart3" width="400" height="400" style="background-color: white"></canvas></div>
                <br><br>
                <div class="col-sm-4"><canvas id="barchart3" width="400" height="400" style="background-color: white"></canvas></div>
            </div>
            <br>
            <p style="font-size: 150px;margin-left: 750px;">2020</p>
        </div>
@endsection