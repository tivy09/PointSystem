@extends('layouts.admin')
@section('content')

@php
$string1 = rand(1, 5);
$string2 = rand(20, 50);

if($string1 == 1)
    $people = 'Manager 1';
elseif($string1 == 2)
    $people = 'Manager 2';
elseif($string1 == 3)
    $people = 'Manager 3';
elseif($string1 == 4)
    $people = 'Manager 4';
elseif($string1 == 5)
    $people = 'Manager 5';

@endphp
@foreach($departments as $department)
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} Department Detail
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.role.fields.id') }}
                        </th>
                        <td>
                            {{ $department->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Department Name
                        </th>
                        <td>
                            {{ $department->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Department Principal
                        </th>
                        <td>
                            {{$people}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Total Department Member
                        </th>
                        <td>
                            {{ $string2 }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.department.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection