@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    {{ Auth::user()->email }}
                </div>
            </div>

            <div class="card" style="width: 600px;">
                <div class="card-body">
                    <div>
                        <table style="border-spacing: 0.5rem; ">
                            <tr>
                                <th colspan="4" style="padding-left: 200px;"><h2>To Do List</h2></th>
                            </tr>
                            <tr>
                                <form action="{{ route('user.todo.store') }}" method="post">
                                    @csrf
                                    <td colspan="3" style="width: 450px; padding: 0.5rem;">
                                        <input type="text" name="description" id="description">
                                    </td>

                                    <td colspan="1" style="width: 150px; padding: 0.5rem;">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <button type="submit">Add</button>
                                    </td>
                                </form>
                            </tr>
                            @foreach($todos as $todo)
                                @if($todo->user_id == Auth::user()->id)
                                <tr style="padding-top: 10px; border-bottom: 1px solid #ddd; height: 46px;">
                                    <td colspan="1" style="width: 80px; padding: 0.5rem;">
                                        @if($todo->is_delete == 3 || $todo->is_delete == 2)
                                            <img src="{{ asset('icon/x.svg') }}" alt="" width="23" height="23">
                                        @elseif($todo->is_delete == 1)
                                            <img src="{{ asset('icon/check2.svg') }}" alt="" width="20" height="20">
                                        @elseif($todo->is_delete == null)
                                        
                                        @endif
                                    </td>
                                    <td colspan="2" style="width: 370px;">
                                        @if($todo->is_delete == 3 || $todo->is_delete == 2)
                                            <h5><b class="delete" style="margin-left: 0px">{{ $todo->description }}</b></h5>
                                        @elseif($todo->is_delete == 1)
                                            <h5><b class="delete" style="margin-left: 0px">{{ $todo->description }}</b></h5>
                                        @elseif($todo->is_delete == null)
                                            <h5><b><a href="" class="herf">{{ $todo->description }}</a></b></h5>
                                        @endif
                                    </td>
                                    <td colspan="1" style="width: 150px;">
                                        @if($todo->is_delete == null)
                                            <a href="">
                                                <span class="badge badge-pill badge-warning">Edit</span>
                                            </a>

                                            <a href="" onclick="return confirm('Sure Want Delete?')">
                                                <span class="badge badge-pill badge-danger">Delete</span>
                                            </a>
                                        @elseif($todo->is_delete == 3 || $todo->is_delete == 2)
                                            <a href="">
                                                <span class="badge badge-pill badge-danger">Rejected</span>
                                            </a>
                                        @elseif($todo->is_delete == 1)
                                            <span class="badge badge-pill badge-success">Approved</span>
                                        @endif
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection