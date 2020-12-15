@extends('layouts.admin') @section('content')
@foreach($users as $user)
@foreach($salaries as $salary)

@php
    $subtotal = 100 * $leave;
    $User_salary = $salary-> Salary_amount;
    $tax = $User_salary*(6/100);
    $total_salary = $User_salary - $tax - $subtotal;
@endphp


<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.user.title') }} Salary
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('user.salary.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th style="width: 50%">
                            Employee {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 50%">
                            Employee Position
                        </th>
                        <td>
                            {{ $user->position }}
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 50%">
                            Employee Salary
                        </th>
                        <td>
                            {{ $salary-> Salary_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 50%">
                            Employee Leave Apply (One day 10 hours/1 hours RM10)
                        </th>
                        <td>
                        {{$leave}} days
                        </td>
                    </tr>
                    
                    <tr>
                        <th style="width: 50%">
                            Tax (6%)
                        </th>
                        <td>
                            {{ $tax }}
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 50%">
                            Total Salary
                        </th>
                        <td>
                            {{ $total_salary }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach
@endforeach

@endsection