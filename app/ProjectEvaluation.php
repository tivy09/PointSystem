<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectEvaluation extends Model
{
    use HasFactory;

    public $table = 'project_evaluations';

    protected $fillable = [
        'employee_name',
        'project_id',
        'task_id',
        'Knowledge',
        'Quality',
        'Productivity',
        'Dependability',
        'Attendance',
        'Relations',
        'Commitment',
        'Supervisory',
        'Appraisal',
        'TotalScore',
        'feedback',
        'TrainPlan',
        'deadline',
        'status',
    ];
}
