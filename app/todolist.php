<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    use HasFactory;

    public $table = 'todolists';

    protected $fillable = [
        'description',
        'user_id',
        'CurrentDate',
        'is_delete',
    ];
}
