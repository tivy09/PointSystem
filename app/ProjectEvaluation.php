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
    ];
}
