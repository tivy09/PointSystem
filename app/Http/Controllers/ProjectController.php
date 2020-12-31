<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\User;
use App\Project;
use App\ProjectTask;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	//Project
    public function indexProject()
    {
        $project=DB::table('projects')
        ->leftjoin('users', 'users.id', '=', 'projects.Leader_id')
        ->select('users.name as username', 'projects.*')
        ->get();
        return view('admin.project.indexProject')->with('Projects', $project);
    }

    public function createProject()
    {
        return view('admin.project.createProject');
    }

    public function storeProject(Request $request)
    {
        $project = Project::create([
            'Name' => $request->Name,
            'Start_date' => $request->Start_date,
            'End_date' => $request->End_date,
            'Leader_id' => $request->Leader_id,
            'NumberofMember' => $request->NumberofMember,
            'Description' => $request->Description,
        ]);

        Toastr::success('Project has been recorded! 🙂','Success');

        return redirect()->route('admin.Project.indexProject');
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);
        $project->Status2 = 1;
        $project->save();

        $project = DB::table('project_tasks')->where('Project_id', $id)->update(['Status2' => 1]);

        Toastr::success('Project has been End! 🙂','Success');

        return redirect()->route('admin.Project.indexProject');
    }

    public function deleteProjectRecord($id)
    {
        $project = Project::find($id);
        $project->delete();

        DB::table('project_tasks')->where('Project_id', '=', $id)->delete();
        
        Toastr::success('Project Record has been Deleted! 🙂','Success');

        return redirect()->route('admin.Project.indexProject');
    }

    //Project Task
    public function indexProjectTask()
    {
    	$currentUserID = Auth::user()->id;

		$users = DB::table('users')
		->select('users.project_id as userProId')
		->where('users.id','=',$currentUserID)
		->value('userProId');

    	$task = DB::table('project_tasks')
    	->leftjoin('users', 'users.project_id', '=', 'project_tasks.Project_id')
    	->select('project_tasks.*')
    	->where('project_tasks.Project_id', '=', $users)
    	->where('users.id','=',$currentUserID)
        ->get();
        
        $username = DB::table('project_tasks')
        ->leftjoin('users', 'users.id', '=', 'project_tasks.User_id')
        ->select('users.name as username')
        ->where('project_tasks.Project_id', '=', $users)
        ->get();
        return view('admin.project.indexProjectTask')->with('tasks',$task)->with('usernames',$username);
    }

    public function createProjectTask($id)
    {
    	$project = project::all()->where('id',$id);
        return view('admin.project.createProjectTask')->with('projects',$project);
    }

    public function storeProjectTask(Request $request)
    {
    	$project = ProjectTask::create([
            'name' => $request->name,
            'Start_date' => $request->Start_date,
            'Project_id' => $request->Project_id,
            'Leader_id' => $request->Leader_id,
            'Description' => $request->Description,
        ]);
        Toastr::success('Project Task has been recorded! 🙂','Success');
        return redirect()->route('admin.Project.indexProject');
    }

    public function enrollProjectTask(Request $request, $id)
    {
    	$task = ProjectTask::find($id);
        $task->User_id = $request->employee_id;
        $task->save();
        
        Toastr::success('Project Task has been Enroll ! 🙂','Success');
        return redirect()->route('admin.Project.indexProjectTask');
    }

    public function ProjectTaskAction(Request $request, $id)
    {
		$task = ProjectTask::find($id);
        $task->Status = $request->Status;
        $task->save();

        Toastr::success('Project Task Status has been recorded! 🙂','Success');

        return redirect()->route('admin.Project.indexProjectTask');	
    }

    //Project List
    public function indexProjectList()
    {
    	$currentUserID = Auth::user()->id;
    	$project = DB::table('projects')
    	->leftjoin('users', 'users.id', '=', 'projects.Leader_id')
    	->select('users.name as username', 'projects.*')
    	->get();

		$count = DB::table('users')
		->select('users.project_id as userproject')
		->where('users.id','=',$currentUserID)
		->value('project_id');

        return view('admin.project.indexProjectList',compact('count'))->with('projects',$project);
    }
    public function enrollProjectList(Request $request)
    {
    	$id = $request->employee_id;
    	$users = User::find($id);
    	$users->project_id = $request->project_id;
    	$users->save();

    	$Project_id = $request->project_id;
        $count = DB::table('projects')->where('projects.id','=',$Project_id)->value('NumberofMember');
        $subtotal = $count - 1;
        $project = project::find($Project_id);
        $project->NumberofMember = $subtotal;
        $project->save();
        return redirect()->route('admin.Project.indexProjectList');
    }

    //Evaluation
    public function indexProjectEvaluation()
    {
    	$currentUserID = Auth::user()->id;
        $task = DB::table('project_tasks')
        ->select('project_tasks.*')
        ->where('project_tasks.Leader_id','=',$currentUserID)
        ->get();
        
        return view('admin.project.indexProjectEvaluation')->with('tasks',$task);
    }

    public function ProjectEvaluationRecord($id)
    {
        $task = ProjectTask::all()->where('id',$id);
        return view('admin.project.EvaluationRecord')->with('tasks', $task);
    }
}
