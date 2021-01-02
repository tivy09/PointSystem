<?php

namespace App\Http\Controllers;
use DB;
use App\job_app;
use App\job_hirings;
use App\job_location;
use App\job_type;
use App\job;
use App\department;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class JobAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job=DB::table('jobs')
        ->leftjoin('job_apps', 'job_apps.id', '=', 'jobs.position')
        ->leftjoin('job_hirings', 'job_hirings.id', '=', 'jobs.is_approved')
        ->select('job_apps.name as PosiName', 'job_hirings.name as HiriName', 'jobs.*')
        ->get();
        return view('admin.Job.index')->with('jobs',$job);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location=job_location::all();
        $type=job_type::all();
        $department=department::all();
        return view('admin.Job.JobApply.create')->with('locations',$location)
                                                ->with('types',$type)
                                                ->with('departments',$department);
    }

    public function createJob()
    {
        $jobapp=DB::table('job_apps')
        ->leftjoin('job_types', 'job_types.id', '=', 'job_apps.types')
        ->select('job_types.name as tyName', 'job_apps.*')
        ->get();
        return view('admin.Job.create')->with('jobapps',$jobapp);
    }

    public function storeJob(Request $request)
    {
        $image=$request->file('file');
        $image->move('resemu',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();

        job::create([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'age'=>$request->age,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'position'=>$request->position,
            'file'=>$imageName,
            'letter'=>$request->letter,
        ]);

        $id = $request->position;

        $jobapp=DB::table('job_apps')->where('job_apps.id','=',$id)->value('JobCPeople');

        $subtotal = $jobapp - 1;

        $jobapp = job_app::find($id);
        $jobapp->JobCPeople = $subtotal;
        $jobapp->save();

        return view('welcome');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        job_app::create([
            'name'=>$request->name,
            'location'=>$request->location,
            'department'=>$request->department,
            'types'=>$request->types,
            'description'=>$request->description,
            'JobCPeople'=>$request->CPeople,
        ]);
        Toastr::success('Job successfully Created!','Success');

        return redirect()->route('admin.Job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobapp=DB::table('job_apps')
        ->leftjoin('departments', 'departments.id', '=', 'job_apps.department')
        ->leftjoin('job_locations', 'job_locations.id', '=', 'job_apps.location')
        ->leftjoin('job_types', 'job_types.id', '=', 'job_apps.types')
        ->select('departments.name as deName', 'job_locations.name as loName', 'job_types.name as tyName', 'job_apps.*')
        ->where('job_apps.id','=',$id)
        ->get();
        return view('admin.Job.JobManagnment.show')->with('jobapps',$jobapp);
    }

    public function showJob($id)
    {
        $hiring = job_hirings::all();
        $job=DB::table('jobs')
        ->leftjoin('job_apps', 'job_apps.id', '=', 'jobs.position')
        ->leftjoin('job_hirings', 'job_hirings.id', '=', 'jobs.is_approved')
        ->select('job_apps.name as PosiName', 'job_hirings.name as HiriName', 'jobs.*')
        ->where('jobs.id','=',$id)
        ->get();
        return view('admin.Job.show')->with('jobs',$job)->with('hirings',$hiring);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location=job_location::all();
        $type=job_type::all();
        $department=department::all();
        $jobapp=DB::table('job_apps')
        ->leftjoin('departments', 'departments.id', '=', 'job_apps.department')
        ->leftjoin('job_locations', 'job_locations.id', '=', 'job_apps.location')
        ->leftjoin('job_types', 'job_types.id', '=', 'job_apps.types')
        ->select('departments.name as deName', 'job_locations.name as loName', 'job_types.name as tyName', 'job_apps.*')
        ->where('job_apps.id','=',$id)
        ->get();
        return view('admin.Job.JobManagnment.edit') ->with('jobapps',$jobapp)
                                                    ->with('locations',$location)
                                                    ->with('types',$type)
                                                    ->with('departments',$department);
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
        $jobapp = job_app::find($id);
        $jobapp->name = $request->name;
        $jobapp->location = $request->location;
        $jobapp->department = $request->department;
        $jobapp->types = $request->types;
        $jobapp->description = $request->description;
        $jobapp->JobCPeople = $request->CPeople;
        $jobapp->save();

        Toastr::success('Job Detail update successfully :)','Success');
        return redirect()->route('admin.JobApp.index');
    }

    public function approved(Request $request, $id)
    {
        $job = job::find($id);
        $job->is_approved = $request->status;
        $job->save();
        Toastr::success('Job Interview Status update successfully :)','Success');
        return redirect()->route('admin.Job.index');
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
