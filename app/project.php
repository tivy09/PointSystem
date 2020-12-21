<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    public $table = 'projects';

    protected $fillable = [
        'name',
        'Start_date',
        'End_date',
        'leader',
        'NumberofMember',
        'description',
        'random',
    ];
}
