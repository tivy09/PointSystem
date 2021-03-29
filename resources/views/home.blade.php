@extends('layouts.admin')
@section('content')

@php 
    $current = date('Y-m-d');
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="height: 550px">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <a href="{{ url('/home/new1') }}"><img src="{{ asset('slideshow/img_mountains_wide.jpg') }}" style="height: 400px; width:100%"></a>
                        </div>

                        <div class="mySlides fade">
                            <a href="{{ url('/home/new2') }}"><img src="{{ asset('slideshow/img_snow_wide.jpg') }}" style="height: 400px; width:100%"></a>
                        </div>

                        <div class="mySlides fade">
                            <a href="{{ url('/home/new3') }}"><img src="{{ asset('slideshow/img_woods_wide.jpg') }}" style="height: 400px; width:100%"></a>
                        </div>

                    </div>
                    <br>
                    <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card" style="min-height: 550px; max-height: 550px; overflow: scroll; white-space: normal; width: 550px">
                <div class="card-body">
                    <div>
                        <table style="border-spacing: 0.5rem;">
                            <tr>
                                <th colspan="4" style="padding-left: 180px;"><h2>To Do List</h2></th>
                            </tr>
                            <tr>
                                <form action="{{ route('user.todo.store') }}" method="post">
                                    @csrf
                                    <td colspan="3" style="width: 450px; padding: 0.5rem;">
                                        <input type="text" name="description" id="description">
                                    </td>

                                    <td colspan="1" style="width: 150px; padding: 0.5rem;">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="CurrentDate" value="{{ date('Y-m-d') }}">
                                        <button type="submit">Add</button>
                                    </td>
                                </form>
                            </tr>
                            @foreach($todos as $todo)
                                @if($todo->user_id == Auth::user()->id && $todo->is_delete != 3)
                                    @if($todo->CurrentDate == $current)
                                    <tr style="padding-top: 10px; border-bottom: 1px solid #ddd; height: 46px;">
                                        <td colspan="1" style="width: 80px; padding: 0.5rem;">
                                            @if($todo->is_delete == 1)
                                                <img src="{{ asset('icon/check2.svg') }}" alt="" width="20" height="20">
                                            @elseif($todo->is_delete == null)
                                            
                                            @endif
                                        </td>
                                        <td colspan="2" style="width: 370px;">
                                            @if($todo->is_delete == 1)
                                                <h5><b class="delete" style="margin-left: 0px">{{ $todo->description }}</b></h5>
                                            @elseif($todo->is_delete == null)
                                                <h5><b><a href="{{ route('user.todo.complete', ['id' => $todo->id]) }}" class="herf">{{ $todo->description }}</a></b></h5>
                                            @endif
                                        </td>
                                        <td colspan="1" style="width: 150px;">
                                            @if($todo->is_delete == null)
                                                <a href="{{ route('user.todo.edit', ['id' => $todo->id]) }}">
                                                    <span class="badge badge-pill badge-warning" style="height: 25.25px;padding-top: 8px;">Edit</span>
                                                </a>
                                                <a href="{{ route('user.todo.destroy', ['id' => $todo->id]) }}" onclick="return confirm('Sure Want Delete?')">
                                                    <span class="badge badge-pill badge-danger" style="height: 25.25px;padding-top: 8px;">Delete</span>
                                                </a>
                                            @elseif($todo->is_delete == 1)
                                                <span class="badge badge-pill badge-success" style="height: 25.25px;padding-top: 8px;">Complete</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endif
                                @endif
                            @endforeach
                                <tr style="height: 50px;">
                                    <td colspan="4" style="padding-top: 20px; padding-left: 407px;">
                                        <span class="badge badge-pill badge-success" style="height: 25.25px;padding-top: 8px;">
                                            <a onclick="document.getElementById('id03').style.display = 'block';">Event History</a>
                                        </span>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div id="id03" class="modal1">
        <div class="modal-content1 animate1">
            <div class="modalcontainer1" style="min-height: 196px; max-height: 232px; overflow: scroll; white-space: normal;">
                <h2 style="margin-left: 150px;">Event History</h2>
                <table>
                    <tr>
                        <th>Event</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    @foreach($todos as $todo)
                        @if($todo->user_id == Auth::user()->id)
                            @if($todo->CurrentDate < $current || $todo->is_delete == 3)
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="width: 230px;">{{$todo->description}}</td>
                        <td style="width: 230px;">{{$todo->CurrentDate}}</td>
                        <td>
                            @if($todo->is_delete == null || $todo->is_delete == 3)
                                <span class="badge badge-pill badge-warning" style="height: 20px;padding-top: 5px;">Uncomplete</span>
                            @else
                                <span class="badge badge-pill badge-success" style="height: 20px;padding-top: 5px;">Complete</span>
                            @endif
                        </td>
                    </tr>
                            @endif
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<script>
var slideIndex = 0;
showSlides();
</script>
@endsection