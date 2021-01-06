@extends('layouts.admin')
@section('content')

<script src="{{ asset('js/camera.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

@endsection