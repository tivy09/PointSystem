@extends('layouts.admin') @section('content')

<div id="main-wrapper">
    <div class="page-wrapper">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Salary List</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-bordered table-striped table-hover datatable datatable-Role">
                        <thead>
                            <tr>
                                <th style="width: 50px;">
                                    No.
                                </th>
                                <th>
                                    Employe name
                                </th>
                                <th>
                                    Salary Amount
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                @if($user->salary == null)
                                    <td>0</td>
                                @elseif($user->salary > 0)
                                    <td>{{ $user->salary }}</td>
                                @endif
                                <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('user.salary.show', ['id' => $user->id]) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                    <a class="btn btn-xs btn-info" href="{{ route('user.salary.edit', ['id' => $user->id]) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                    <a href="{{ route('user.salary.destroy', ['id' => $user->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')">
                                        {{ trans('global.delete') }}
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection