@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        New Email
    </div>

    <div class="card-body">
        <form action="{{ route("user.email.store") }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="form_email">From: </label>
                <input type="email" id="form_email" name="form_email" class="form-control" value="{{ Auth::user()->email }}" required readonly>
            </div>
            <div class="form-group">
                <label for="to_email">To: </label>
                <input type="email" id="to_email" name="to_email" class="form-control" value="" required>
            </div>
            <div class="form-group">
                <label for="password">Email Subject</label>
                <input type="text" name="Email_title" id="Email_title" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Email Message</label>
                <textarea name="Email_MSG" id="Email_MSG" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group" >
                <label for="password">Add file</label>
                <!-- File input field -->
                <input type="file" name="Email_file" id="Email_file" onchange="return fileValidation()" class="form-control" style="padding-left: 0px;border: 0px;"><br>
                <!-- Image preview -->
                <div id="imagePreview" width="51px" height="70px"></div>
            <div>
                <input type="hidden" name="EmailSender" value="{{ Auth::user()->name }}">
                <br><input class="btn btn-danger" type="submit" value="{{ trans('global.send') }}" onclick="return checkError()">
            </div>
        </form>


    </div>
</div>
@endsection