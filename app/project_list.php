<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_list extends Model
{
    use HasFactory;

    public $table = 'project_lists';

    protected $fillable = [
        'employee_id',
        'project_id',
    ];
}
