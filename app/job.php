<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    public $table = 'jobs';

    protected $fillable = [
        'name',
        'gender',
        'age',
        'email',
        'phone',
        'position',
        'is_approved',
        'file',
        'letter',
    ];
}
