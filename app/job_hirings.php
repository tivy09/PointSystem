<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_hirings extends Model
{
    use HasFactory;

    public $table = 'job_hirings';

    protected $fillable = [
        'name',
    ];
}
