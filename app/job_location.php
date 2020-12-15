<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_location extends Model
{
    use HasFactory;

    public $table = 'job_locations';

    protected $fillable = [
        'name',
    ];
}
