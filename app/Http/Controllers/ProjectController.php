<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\project;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\StoreProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project=DB::table('projects')
        ->leftjoin('users', 'users.id', '=', 'projects.leader')
        ->select('users.name as username', 'projects.*')
        ->get();

        $status = 60;

        return view('admin.project.index',compact('status'))->with('projects',$project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('admin.project.create')->with('users',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = project::create([
            'name' => $request->name,
            'Start_date' => $request->Start_date,
            'End_date' => $request->End_date,
            'leader' => $request->leader,
            'description' => $request->description,
        ]);

        Toastr::success('Project has been recorded! 🙂','Success');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
