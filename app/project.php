<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    public $table = 'projects';

    protected $fillable = [
        'Name',
        'Start_date',
        'End_date',
        'Leader_id',
        'NumberofMember',
        'Description',
        'Random',
    ];
}
