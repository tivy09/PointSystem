<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_Task extends Model
{
    use HasFactory;

    public $table = 'project__tasks';

    protected $fillable = [
        'name',
        'Start_date',
        'Project_id',
        'user_id',
        'description',
        'status',
    ];
}
