@extends('layouts.admin')
@section('content')

<script src="{{ asset('js/camera.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

<div class="clock">
    <canvas id="Ccanvas" width="200" height="200" style="background-color:#e5e5e6"></canvas>
    <h2 style="padding-left: 40px;"><p id="demo"></p></h2>
    <h2 style="padding-left: 40px;"><p id="demo1"></p></h2>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <b><h1 style="margin-left: 15px;">Take Snapshot to Check In😊</h1></b>
            <div id="my_camera"></div>
                <form action="{{ asset('phpfile/storeImage.php') }}" method="post">
                    <button onClick="take_snapshot()" style="width: 160px; height: 60px; text-align: center; font-size: 20px;margin-left: 170px" class="btn btn-success">Take Snapshot</button>
                    <input type="hidden" name="avater" class="image-tag">
                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="time" value="{{ date('H:i:s') }}">
                    <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
                </form>
        </div>
    </div>
</div>

<script>
    
var p = new Date();
var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
document.getElementById("demo").innerHTML = days[p.getDay()];

var Ptoday = new Date();
var Pdate = Ptoday.getFullYear()+'-'+(Ptoday.getMonth()+1)+'-'+Ptoday.getDate();
document.getElementById("demo1").innerHTML = Pdate;

var Pcanvas = document.getElementById("Ccanvas");
var ctx = Pcanvas.getContext("2d");
var radius = Pcanvas.height / 2;
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
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

@endsection