<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\User;
use App\Salary;
use App\Leave;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=user::all();
        return view('admin.salary.index')->with('users',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Toastr::success(' Salary add already!! ','Success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = user::all()->where('id',$id);
        $salary = salary::all()->where('employee_id', $id);
        $leave = DB::table('leaves')->where('employee_id', $id)->where('is_approved','=',1)->sum('days');
        return view('admin.salary.show', compact('leave'))->with('users',$user)->with('salaries', $salary);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::all()->where('id',$id);
        return view('admin.salary.edit')->with('users',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = user::find($id);
        $users->salary = $request->Salary_amount;
        $users->save();

        $addSalary = salary::create([
            'employee_id' => $request->employee_id,
            'Salary_amount' => $request->Salary_amount,
        ]);
        Toastr::success('Salary update successfully :)','Success');

        $user=user::all();
        return view('admin.salary.index')->with('users',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = DB::table('users')
        ->select('users.id', '=', $id)
        ->delete();

        $salary = DB::table('salaries')
        ->select('salaries.employee_id', '=', $id)
        ->delete();

        $user=user::all();
        return view('admin.salary.index')->with('users',$user);
    }
}
