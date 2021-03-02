<?php

namespace App\Http\Controllers;
use DB;
use App\job_app;
use App\job_hirings;
use App\job_location;
use App\job_type;
use App\job;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class JobController extends Controller
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
        $location = job_location::all();
        $type = job_type::all();
        $hiring = job_hirings::all();

        $deName=DB::table('job_apps')
        ->leftjoin('departments', 'departments.id', '=', 'job_apps.department')
        ->select('departments.name as deName','job_apps.*')
        ->get();

        return view('admin.Job.JobManagnment.index')->with('locations',$location)
                                                    ->with('types',$type)
                                                    ->with('hirings',$hiring)
                                                    ->with('jobs',$deName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createHiring()
    {
        return view('admin.Job.JobManagnment.hiring.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createLocation()
    {
        return view('admin.Job.JobManagnment.location.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createType()
    {
        return view('admin.Job.JobManagnment.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeHiring(Request $request)
    {
        job_hirings::create([
            'name'=>$request->name,
        ]);

        Toastr::success('Job Hirings successfully requested to HR!','Success');

        return redirect()->route('admin.JobApp.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeLocation(Request $request)
    {
        job_location::create([
            'name'=>$request->name,
        ]);

        Toastr::success('Job Location successfully requested to HR!','Success');

        return redirect()->route('admin.JobApp.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeType(Request $request)
    {
        job_type::create([
            'name'=>$request->name,
        ]);

        Toastr::success('Job Types successfully requested to HR!','Success');

        return redirect()->route('admin.JobApp.index');
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
    public function editHiring($id)
    {
        $hiring = job_hirings::all()->where('id',$id);
        return view('admin.Job.JobManagnment.hiring.edit')->with('hirings',$hiring);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editLocation($id)
    {
        $location = job_location::all()->where('id',$id);
        return view('admin.Job.JobManagnment.location.edit')->with('locations',$location);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editType($id)
    {
        $type = job_type::all()->where('id',$id);
        return view('admin.Job.JobManagnment.type.edit')->with('types',$type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateHiring(Request $request, $id)
    {
        $hiring = job_hirings::find($id);
        $hiring->name = $request->name;
        $hiring->save();
        Toastr::success('Job Hirings update successfully :)','Success');
        return redirect()->route('admin.JobApp.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateLocation(Request $request, $id)
    {
        $location = job_location::find($id);
        $location->name = $request->name;
        $location->save();
        Toastr::success('Job location update successfully :)','Success');
        return redirect()->route('admin.JobApp.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateType(Request $request, $id)
    {
        $type = job_type::find($id);
        $type->name = $request->name;
        $type->save();
        Toastr::success('Job types update successfully :)','Success');
        return redirect()->route('admin.JobApp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyHiring($id)
    {
        $hirings = job_hirings::find($id);
        $hirings->delete();
        Toastr::success('Job Hirings Proess deleted successfully :)','Success');
        return redirect()->route('admin.JobApp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyLocation($id)
    {
        $location = job_location::find($id);
        $location->delete();
        Toastr::success('Job Location deleted successfully :)','Success');
        return redirect()->route('admin.JobApp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyType($id)
    {
        $type = job_type::find($id);
        $type->delete();
        Toastr::success('Job Location deleted successfully :)','Success');
        return redirect()->route('admin.JobApp.index');
    }
}
