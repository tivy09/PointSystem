<?php

namespace App\Http\Controllers;
use Arr;
use DB;
use Auth;
use App\User;
use App\Email;
use App\Project;
use App\ProjectTask;
use App\ProjectEvaluation;
use App\EvalustionAnswer;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	//Project
    public function indexProject()
    {
        $project=DB::table('projects')
        ->leftjoin('users', 'users.id', '=', 'projects.Leader_id')
        ->select('users.name as username', 'projects.*')
        ->get();
        
        $countProject = Project::all()->count();
        $array_list = [];
        $countTotal = 1;
        for ($i=1; $i <= $countProject; $i++) {
            $countTask = DB::table('project_tasks')->where('Project_id', $i)->Sum('Status');
            $countTotal = DB::table('project_tasks')->where('Project_id', $i)->count('Status');
            if ($countTask == 0) {
                $total = 0;
            }else{
                $total = $countTask/$countTotal;
            }
            
            $array_list[] = [
                'count'=> (int)$total
            ];
        }

        $PLPL = Arr::flatten($array_list);

        return view('admin.project.indexProject', compact('PLPL'))->with('Projects', $project);
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

    public function showProject($id)
    {
        // $project = Project::all()->where('id',$id);
        $project = DB::table('projects')
        ->leftjoin('users', 'users.id', '=', 'projects.Leader_id')
        ->select('users.name as username', 'projects.*')
        ->where('projects.id', '=', $id)
        ->get();

        $task = DB::table('project_tasks')
        ->leftjoin('users', 'users.id', '=', 'project_tasks.User_id')
        ->select('users.name as username', 'project_tasks.*')
        ->where('project_tasks.Project_id', '=', $id)
        ->get();
        return view('admin.Project.showProject')->with('projects', $project)->with('tasks', $task);
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
        $task = DB::table('users')
        ->leftjoin('project_tasks', 'project_tasks.User_id', '=', 'users.name')
        ->select('users.email as useremail', 'project_tasks.id as tasksID', 'project_tasks.Project_id as project_id', 'project_tasks.*')
        ->where('project_tasks.id', '=', $id)
        ->get();

        return view('admin.project.EvaluationRecord')->with('tasks', $task);
    }

    public function storeProjectEvaluation(Request $request)
    {
        //calculate
        $Knowledge = $request->Knowledge;
        $Quality = $request->Quality;
        $Productivity = $request->Productivity;
        $Dependability = $request->Dependability;
        $Attendance = $request->Attendance;
        $Relations = $request->Relations;
        $Commitment = $request->Commitment;
        $Supervisory = $request->Supervisory;
        $Appraisal = $request->Appraisal;

        $total = 0;
        $subtotal = $Quality + $Productivity + $Dependability + $Attendance + $Relations + $Commitment + $Supervisory + $Appraisal;
        $total = $subtotal/9;

        $evaluation = ProjectEvaluation::create([
            'employee_name'=>$request->employee_name,
            'project_id'=>$request->project_id,
            'tasks_id'=>$request->tasks_id,
            'Knowledge'=>$request->Knowledge,
            'Quality'=>$request->Quality,
            'Productivity'=>$request->Productivity,
            'Dependability'=>$request->Dependability,
            'Attendance'=>$request->Attendance,
            'Relations'=>$request->Relations,
            'Commitment'=>$request->Commitment,
            'Supervisory'=>$request->Supervisory,
            'Appraisal'=>$request->Appraisal,
            'TotalScore'=>$total,
            'feedback'=>$request->feedback,
        ]);
        
        $id = $request->tasks_id;
        $task = ProjectTask::find($id);
        $task->Status2 = 1;
        $task->save();

        Toastr::success('Evaluation has been recorded! 🙂','Success');
        return redirect()->route('admin.Project.Evaluation');
    }

    public function Evaluation()
    {
        $eva = DB::table('project_evaluations')
        ->join('projects', 'projects.id', '=', 'project_evaluations.project_id')
        ->join('project_tasks', 'project_tasks.id', '=', 'project_evaluations.tasks_id')
        ->select('projects.Name as project_name', 'project_tasks.name as taskname', 'project_evaluations.*')
        ->get();

        return view('admin.HRAdmin.index')->with('evas', $eva);
    }

    public function ShowEvaluation($id)
    {
        $evalu = DB::table('project_evaluations')
        ->join('users' , 'users.name','=','project_evaluations.employee_name')
        ->select('users.name as username','users.email as useremail','project_evaluations.*')
        ->where('project_evaluations.id','=',$id)
        ->get();

        $index = DB::table('evalustion_answers')
        ->join('project_evaluations', 'project_evaluations.id', '=', 'evalustion_answers.evaluation_id')
        ->join('users' , 'users.name','=','evalustion_answers.employee_name')
        ->select('users.email as useremail', 'project_evaluations.id as evaluations_id', 'evalustion_answers.*')
        ->where('evalustion_answers.evaluation_id','=',$id)
        ->get();

        return view('admin.HRAdmin.show')->with('evalus',$evalu)->with('indexs', $index);
    }

    public function updatePlan(Request $request, $id)
    {
        $task = ProjectEvaluation::find($id);
        $task->deadline = $request->deadline;
        $task->TrainPlan = $request->TrainPlan;
        $task->save();

        $addEmail=Email::create([
            'form_email'=>'Human Resource Department',
            'to_email'=>$request->employee_email,
            'EmailSender'=>'Human Resource Department',
            'Email_title'=>'Training Plan',
            'Email_file'=>'',
            'Email_MSG'=>'You Plan has be Seleted. Pls Do the Plan.🤗',
        ]);

        Toastr::success('Plan has been Send! 🙂','Success');
        return redirect()->route('admin.Project.EvaluationAdmin');
    }

    public function DeleteEvaluation($id)
    {
        $task = ProjectEvaluation::find($id);
        $task->delete();
        Toastr::success('Record has been Deleted! 🙂','Success');
        return redirect()->route('admin.Project.EvaluationAdmin');
    }

    //training
    public function training()
    {
        $evaluation = DB::table('project_evaluations')
        ->select('project_evaluations.*')
        ->Where('project_evaluations.employee_name','=',Auth::user()->name)
        ->get();

        return view('user.training.index')->with('evaluations',$evaluation);
    }


    public function loading($id)
    {
        $userEvaluationId = $id;
        return view('user.training.loading',compact('userEvaluationId'));
    }

    public function Answer($id)
    {
        $userEvaluationId = $id;
        return view('user.training.answer',compact('userEvaluationId'));
    }

    public function StoreTotalScore(Request $request, $id)
    {
        $task = ProjectEvaluation::find($id);
        $task->status = 1;
        $task->save();

        $Answer=EvalustionAnswer::create([
            'employee_name'=>$request->employee_name,
            'employee_id'=>$request->employee_id,
            'question1'=>$request->question1,
            'question2'=>$request->question2,
            'question3'=>$request->question3,
            'question4'=>$request->question4,
            'questionNum'=>$request->questionNum,
            'evaluation_id'=>$request->evaluation_id,
        ]);
        Toastr::success('Topic has been Submited! 🙂','Success');

        return redirect()->route('admin.Project.EvaluationEmployee');
    }

    public function ShowEnterScore($id)
    {
        $index = DB::table('evalustion_answers')
        ->join('project_evaluations', 'project_evaluations.id', '=', 'evalustion_answers.evaluation_id')
        ->join('users' , 'users.name','=','evalustion_answers.employee_name')
        ->select('users.email as useremail', 'project_evaluations.id as evaluations_id', 'evalustion_answers.*')
        ->where('evalustion_answers.evaluation_id','=',$id)
        ->get();

        return view('admin.HRAdmin.score')->with('indexs',$index);
    }

    public function EnterScore(Request $request, $id)
    {
        $total = $request->totalscore;
        $evaluations_id = $request->evaluations_id;
        $EvaId=ProjectEvaluation::find($evaluations_id);
        $EvaId->TotalScore2 = $total;
        $EvaId->save();

        $score=EvalustionAnswer::find($id);
        $score->totalscore = $total;
        $score->status = 1;
        $score->save();

        
        $feedback = $request->feeedback;
        //Email
        if ($total <= 90 || $total >= 70) {
            $MSG = "“Don’t Let Yesterday Take Up Too Much of Today.” – Will Rogers";
        } elseif($total == 60 || $total == 50) {
            $MSG = "“Everything you’ve ever wanted is on the other side of fear.” - George Addai";
        } elseif ($total <= 40 || $total >= 20) {
            $MSG = "“If you aim at nothing, you will hit it every time.” – Zig Zigler";
        }
        $emailMSG = 'You Score is ' . $total . '/100. Keep it. ' . $MSG . ' '. $feedback;
        $addEmail=Email::create([
            'form_email'=>'Human Resource Department',
            'to_email'=>$request->employee_email,
            'EmailSender'=>'Human Resource Department',
            'Email_title'=>'Topic Score',
            'Email_file'=>'',
            'Email_MSG'=>$emailMSG,
        ]);
        Toastr::success('The topic has been graded! 🙂','Success');
        return redirect()->route('admin.Project.EvaluationAdmin');
    }
}
