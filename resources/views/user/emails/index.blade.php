@extends('layouts.admin') 
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("user.email.create") }}">
            New Email
        </a>
    </div>
</div>

<div class="card" style="width: 1110px;">
    <div class="card-header">
        Inbox
    </div>

    <div class="card-body" style="height: 750px;">
        <div class="row">
            <div class="row-md-4 row-md-push-4" style="padding-left: 15px; padding-right: 15px;height: 700px;">
                <input type="text" id="myInput" onkeyup="searchEmail()" placeholder="Search for Email/Date.." title="Type in a name">
                    <div id="myUL">
                            @foreach($emails as $email)
                                <div class="emailheader">
                                    <a onclick="OpenWindow(event, '{{$email->created_at}}' )" class="tablinks" style="border-top-width: 2px;">{{$email->Email_title}}
                                    <p>{{$email->form_email}}<b style="margin-left: 10px;">{{$email->date_current}}</b></p></a>
                                </div>
                            @endforeach
                    </div>
            </div>
            <div class="row-md-8 row-md-pull-8" style="width: 500px;">
            @foreach($emails as $email)
                <div class="col-xs-8 tabcontent" id="{{$email->created_at}}" style="width: 850px;">
                    <h1>{{$email->Email_title}}</h1>
                    <p>To: &nbsp;&nbsp;&lt;{{$email->to_email}}&gt;</p>
                    <p style="font-size: 25px;">{{$email->Email_MSG}}</p>
                    <p>Form: &nbsp;&nbsp;&lt;{{$email->form_email}}&gt;</p>
                    @if($email->Email_file != null)
                        <a href="{{ asset('Email_File/' )}}/{{ $email->Email_file }}" id="FILE{{$loop->index+1}}" style="display: none;" download>{{ $email->Email_file }}</a>
                        <img src="{{ asset('Email_File/' )}}/{{ $email->Email_file }}" id="IMG{{$loop->index+1}}" style="display: none;height: 30%;" alt="FILE" width="50%" height="20%">
                    @endif
                    <div class="DeleteButton">
                        <a href="{{ route('user.email.destroy', ['id' => $email->id]) }}" class="btn btn-danger deleteEmail" onclick="return confirm('Sure Want Delete?')">Delete</a>
                    </div>
                </div>
                <script>
                    var txt = '{{ $email->Email_file }}'.slice(-3);
                    console.log(txt);
                    if(txt == 'png' || txt == 'jpg' || txt == 'gif'){
                        document.getElementById("IMG{{$loop->index+1}}").style.display = "block";
                        document.getElementById("FILE{{$loop->index+1}}").style.display = "none";
                    }else{
                        document.getElementById("IMG{{$loop->index+1}}").style.display = "none";
                        document.getElementById("FILE{{$loop->index+1}}").style.display = "block";
                    }
                </script>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection