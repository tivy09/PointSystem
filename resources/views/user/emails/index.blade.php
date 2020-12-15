@extends('layouts.admin') 
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("user.email.create") }}">
            New Email
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Inbox
    </div>

    <div class="card-body" style="height: 470px;">
        <div class="row">
            <div class="row-md-4 row-md-push-4" style="padding-left: 15px; padding-right: 15px;">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Email/Date.." title="Type in a name">
                    <div id="myUL">
                            @foreach($emails as $email)
                                @php
                                    $UEmail = Auth::user()->email;
                                    $WEmail = $email->to_email;
                                @endphp

                                @if ($WEmail == $UEmail)
                                <div class="emailheader">
                                    <a onclick="OpenWindow(event, '{{$email->created_at}}' )" class="tablinks" style="border-top-width: 2px;">{{$email->Email_title}}
                                    <p>{{$email->form_email}}<b>{{$email->created_at}}</b></p></a>
                                </div>
                                @endif

                            @endforeach
                    </div>
            </div>
            <div class="row-md-8 row-md-pull-8" style="width: 650px; background-color: yellow;">
            @foreach($emails as $email)
                <div class="col-xs-8 tabcontent" id="{{$email->created_at}}">
                    <h1>{{$email->Email_MSG}}</h1>
                    <p>To: &nbsp;&nbsp;&lt;{{$email->to_email}}&gt;<a href="{{ route('user.email.destroy', ['id' => $email->id]) }}" class="btn btn-danger delete" onclick="return confirm('Sure Want Delete?')">Delete</a></p>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection