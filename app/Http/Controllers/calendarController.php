<?php

namespace App\Http\Controllers;

use DB;
use App\Calendar;
use App\todolist;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class calendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Calendar::all();
        $event = [];

        foreach ($events as $row){
            $event[] = \Calendar::event(
                $row->title,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'color'=>$row->color,
                ]
            );
        }
        $calendar =  \Calendar::addEvents($event);
        return view('admin.calendar.event',compact('events','calendar'));
    }

    public function index2()
    {
        $calendar = Calendar::all();
        return view('admin.calendar.index')->with('calendar', $calendar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.calendar.addevent');
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
            'CurrentDate'=>$request->start_date,
            'description'=>$request->title,
            'user_id'=>$request->user_id,
        ]);

        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $events = new Calendar();
        $events -> title = $request -> title;
        $events -> color = $request -> color;
        $events -> start_date = $request -> start_date;
        $events -> end_date = $request -> end_date;
        $events -> save();

        Toastr::success('Event successfully added!','Success');
        return redirect('calendar');
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
        $event = Calendar::all()->where('id',$id);
        return view('admin.calendar.edit')->with('events',$event);
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
        $calendar = Calendar::find($id);
        $calendar->title = $request->title;
        $calendar -> color = $request -> color;
        $calendar -> start_date = $request -> start_date;
        $calendar -> end_date = $request -> end_date;
        $calendar->save();

        Toastr::success('Event successfully update!','Success');
        return redirect('calendar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calendars = DB::table('calendars')
        ->select('calendars.id', '=', $id)
        ->delete();

        $calendar = Calendar::all();
        Toastr::success('Event successfully Deleted!','Success');
        return view('admin.calendar.index')->with('calendar', $calendar);
    }
}
