<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvalustionAnswer extends Model
{
    use HasFactory;

    public $table = 'evalustion_answers';

    protected $fillable = [
        'employee_name',
        'employee_id',
        'question1',
        'question2',
        'question3',
        'question4',
        'totalscore',
        'status',
        'questionNum',
        'evaluation_id',
    ];
}
