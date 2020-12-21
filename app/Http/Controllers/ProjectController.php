<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\User;
use App\project;
use App\Project_Task;
use App\Project_list;
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

        // $task = Project_Task::all()->where('Project_id', 1)->sum('status');
        // $Counttask = Project_Task::all()->where('Project_id', 1)->count('status');
        // $total = (($task)/($Counttask * 100)) * 100;
        // $totalString = number_format($total, 0);
        // dd($task, $Counttask, $total);

        return view('admin.project.index')->with('projects',$project);
    }

    public function indexList()
    {
        $project=DB::table('projects')
        ->leftjoin('users', 'users.id', '=', 'projects.leader')
        ->leftjoin('project_lists', 'project_lists.project_id', '=', 'projects.id')
        ->select('users.name as username', 'project_lists.employee_id as employeeID', 'projects.*')
        ->get();

        return view('admin.project.Employeelist')->with('projects',$project);
    }

    public function indexTask()
    {
        $currentUserID = Auth::user()->id;
        $task=DB::table('project_lists')
        ->leftjoin('project__tasks', 'project__tasks.Project_id', '=', 'project_lists.project_id')
        ->leftjoin('projects', 'projects.id', '=', 'project_lists.project_id')
        ->select('projects.name as ProName', 'project__tasks.id as taskID', 'project__tasks.*')
        ->where('project_lists.employee_id','=',$currentUserID)
        ->get();
        return view('admin.project.indexTask')->with('tasks',$task);
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

    public function createTask($id)
    {
        $project = project::all()->where('id',$id);
        return view('admin.project.createTask')->with('projects',$project);
    }

    public function Enroll(Request $request)
    {
        $list = project_list::create([
            'employee_id' => $request->employee_id,
            'project_id' => $request->project_id,
        ]);
        
        $id = $request->project_id;

        $count = DB::table('projects')->where('projects.id','=',$id)->value('NumberofMember');
        
        $subtotal = $count - 1;

        $project = project::find($id);
        $project->NumberofMember = $subtotal;
        $project->save();
        
        Toastr::success('Project has been Enroll ! 🙂','Success');
        return redirect()->route('admin.Project.indexList');
    }

    public function EnrollTask($id, Request $request)
    {

        $task = Project_Task::find($id);
        $task->user_id = $request->employee_id;
        $task->save();
        
        Toastr::success('Project Task has been Enroll ! 🙂','Success');
        return redirect()->route('admin.Project.indexTask');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $string = rand(1, 100);
        $project = project::create([
            'name' => $request->name,
            'Start_date' => $request->Start_date,
            'End_date' => $request->End_date,
            'leader' => $request->leader,
            'NumberofMember' => $request->NumberofMember,
            'description' => $request->description,
            'random' => $string,
        ]);

        Toastr::success('Project has been recorded! 🙂','Success');

        return redirect()->route('admin.Project.index');
    }

    public function storeTask(Request $request)
    {
        $project = Project_Task::create([
            'name' => $request->name,
            'Start_date' => $request->Start_date,
            'Project_id' => $request->Project_id,
            'description' => $request->description,
        ]);

        Toastr::success('Project Task has been recorded! 🙂','Success');

        return redirect()->route('admin.Project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project=DB::table('projects')
        ->leftjoin('users', 'users.id', '=', 'projects.leader')
        ->leftjoin('project__tasks', 'project__tasks.id', '=', 'projects.id')
        ->select('users.name as username', 'projects.*')
        ->where('projects.id','=',$id)
        ->get();

        $task=DB::table('project__tasks')
        ->leftjoin('projects', 'projects.id', '=', 'project__tasks.Project_id')
        ->select('project__tasks.*')
        ->where('project__tasks.Project_id','=',$id)
        ->get();

        return view('admin.project.show')->with('projects',$project)->with('tasks',$task);
    }

    public function Action($id, Request $request)
    {
        $task = Project_Task::find($id);
        $task->status = $request->status;
        $task->save();

        Toastr::success('Project Task Status has been recorded! 🙂','Success');

        return redirect()->route('admin.Project.indexTask');
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
