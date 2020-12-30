<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTask extends Model
{
    use HasFactory;

    public $table = 'project_tasks';

    protected $fillable = [
        'name',
        'Start_date',
        'Project_id',
        'User_id',
        'Leader_id',
        'Description',
        'Status',
        'Status2',
    ];
}
