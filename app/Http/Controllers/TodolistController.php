<?php

namespace App\Http\Controllers;
use App\todolist;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
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
    public function show($id)
    {
        //
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
