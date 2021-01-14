@extends('layouts.admin')
@section('content')
<div class="clock">
    <canvas id="Ccanvas" width="200" height="200" style="background-color:#e5e5e6"></canvas>
    <h2 style="padding-left: 40px;"><p id="demo"></p></h2>
    <h2 style="padding-left: 40px;"><p id="demo1"></p></h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if($count > 1)
            <p><b><h1 style="margin-top: 350px; margin-left: 100px;">You already Check In.🤗</h1></b></p>
        @else
            <p><h1 style="display: none;margin-top: 0px; margin-left: 100px;" id="late"><b>You already Late😟</b></h1></p>
            <p><h1 style="display: none;margin-top: 0px; margin-left: 100px;" id="good"><b>Good Morning🤗</b></h1></p>
            @foreach($avaters as $avater)
                <div class="overlay" style="margin-top: 0px;display: none;" id="canvas"><canvas id="reflay" style="position: absolute;"></canvas></div>
                <img src="{{ asset('phpfile/img/') }}/{{$avater->avaters_IMG}}" alt="" id="refimg" width="">
            @endforeach
            <br><br>
            <p><h1 style="display: block;" id="loading"><b style="margin-left: 180px;">Loading...</b></h1></p>
            <p><h1 style="display: none;" id="success"><b style="margin-left: 60px;">Check In Successfully🎉</b></h1></p>
        @endif
        </div>
    </div>
</div>
<script src="{{ asset('js/face-api.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment.min.js"></script>
<script>
    myVar = setTimeout(aleat, 19000);
    function aleat() {
        document.getElementById('loading').style.display = 'none';
        document.getElementById('success').style.display = 'block';
        document.getElementById('canvas').style.display = 'block';
    }

    // current Time
    var d = new Date();
    var hour = d.getHours();
    var min = d.getMinutes();
    var strTime = hour + ":" + min;

    // fake Time
    var a = new Date("2011-04-20T08:00");
    var fakehour = a.getHours(); // => 9
    var fakemin = a.getMinutes(); // =>  30
    var fakeTime = fakehour + ":" + fakemin;

    var SetTime = "09:00";
    var GetTime = strTime;
    // var GetTime = fakeTime;

    var todayDate = moment(new Date()).format("MM-DD-YYYY"); //Instead of today date, We can pass whatever date        

    var startDate = new Date(`${todayDate} ${SetTime}`);
    var endDate = new Date(`${todayDate } ${GetTime}`);
    var timeDiff = Math.abs(startDate.getTime() - endDate.getTime());

    var hh = Math.floor(timeDiff / 1000 / 60 / 60);
    hh = ('0' + hh).slice(-2)

    timeDiff -= hh * 1000 * 60 * 60;
    var mm = Math.floor(timeDiff / 1000 / 60);
    mm = ('0' + mm).slice(-2)

    timeDiff -= mm * 1000 * 60;

    var calcuTime = hh + ":" + mm;
    var setTime = "01:00";

    if (calcuTime > setTime) {
        document.getElementById("late").style.display = "block";
        document.getElementById("good").style.display = "none";
    } else {
        document.getElementById("late").style.display = "none";
        document.getElementById("good").style.display = "block";
    }

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

    $(document).ready(function() {

        async function face() {

            const MODEL_URL = "{{ asset('models/') }}"

            await faceapi.loadSsdMobilenetv1Model(MODEL_URL)
            await faceapi.loadFaceLandmarkModel(MODEL_URL)
            await faceapi.loadFaceRecognitionModel(MODEL_URL)

            const img = document.getElementById('refimg')
            let fullFaceDescriptions = await faceapi.detectAllFaces(img).withFaceLandmarks().withFaceDescriptors()
            const canvas = $('#reflay').get(0)
            faceapi.matchDimensions(canvas, img)

            fullFaceDescriptions = faceapi.resizeResults(fullFaceDescriptions, img)
            faceapi.draw.drawDetections(canvas, fullFaceDescriptions)

            //You want make sure the photo
            const labels = []
            @foreach($usersaa as $user)
                labels.push('{{$user->name}}')
            @endforeach

            const labeledFaceDescriptors = await Promise.all(
                labels.map(async label => {
                    // fetch image data from urls and convert blob to HTMLImage element
                    const imgUrl = `{{ asset('phpfile/avater/') }}/${label}.jpg`
                    const img = await faceapi.fetchImage(imgUrl)

                    // detect the face with the highest score in the image and compute it's landmarks and face descriptor
                    const fullFaceDescription = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()

                    if (!fullFaceDescription) {
                        throw new Error(`no faces detected for ${label}`)
                        alert("Try Angin");
                        
                    }

                    const faceDescriptors = [fullFaceDescription.descriptor]
                    return new faceapi.LabeledFaceDescriptors(label, faceDescriptors)
                })
            );

            const maxDescriptorDistance = 0.6
            const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, maxDescriptorDistance)

            const results = fullFaceDescriptions.map(fd => faceMatcher.findBestMatch(fd.descriptor))

            results.forEach((bestMatch, i) => {
                const box = fullFaceDescriptions[i].detection.box
                const text = bestMatch.toString()
                const drawBox = new faceapi.draw.DrawBox(box, {
                    label: text
                })
                drawBox.draw(canvas)
            })

            console.log(img);
        }
        face()
    })
</script>

@endsection