<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avater extends Model
{
    use HasFactory;

    public $table = 'avaters';

    protected $fillable = [
        'name',
        'avater',
    ];
}
