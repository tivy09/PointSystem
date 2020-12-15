<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_app extends Model
{
    use HasFactory;

    public $table = 'job_apps';

    protected $fillable = [
        'name',
        'location',
        'types',
        'description',
        'department',
        'CPeople',
    ];
}
