<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_type extends Model
{
    use HasFactory;

    public $table = 'job_types';

    protected $fillable = [
        'name',
    ];
}
