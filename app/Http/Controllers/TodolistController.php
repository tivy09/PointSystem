<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\User;
use App\salary;
use App\Leave;
use App\avater;
use App\Project;
use App\todolist;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = todolist::all();
        return view('home')->with('todos',$todo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = todolist::create([
            'CurrentDate'=>$request->CurrentDate,
            'description'=>$request->description,
            'user_id'=>$request->user_id,
        ]);
        Toastr::success('Event has been recorded! 🙂','Success');

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Personal Information
    public function show($id)
    {
        $user = DB::table('users')
        ->leftjoin('project_tasks', 'project_tasks.User_id', '=', 'users.name')
        ->leftjoin('projects', 'projects.Leader_id', '=', 'users.id')
        ->leftjoin('salaries', 'salaries.employee_id', '=', 'users.id')
        ->select('project_tasks.name as tasksName', 'projects.Name as projectName', 'salaries.Salary_amount as salary', 'users.*')
        ->where('users.id', '=', $id)
        ->get();
        
        $salary = salary::all()->where('employee_id', $id);
        $leave = DB::table('leaves')->where('employee_email', Auth::user()->email)->where('is_approved','=',1)->sum('days');
        return view('information', compact('leave'))->with('users', $user)->with('salaries', $salary);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = todolist::all()->where('id', $id);
        return view('edit')->with('todos',$todo);
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
        $todo = todolist::find($id);
        $todo->description = $request->description;
        $todo->save();

        Toastr::success('Event has been Updated! 😊','Success');

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = todolist::find($id);
        $todo->is_delete = 3;
        $todo->save();

        Toastr::success('Event has been deleted! 😊','Success');

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $todo = todolist::find($id);
        $todo->delete();

        Toastr::success('Event has been deleted! 😊','Success');

        return redirect()->route('home');
    }

    public function complete($id)
    {
        $todo = todolist::find($id);
        $todo->is_delete = 1;
        $todo->save();

        Toastr::success('Event has been Complete! 😊','Success');

        return redirect()->route('home');
    }
}
