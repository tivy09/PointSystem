<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'employee_name',
        'leave_type',
        'date_from',
        'date_to',
        'days',
        'reason',
        'is_approved',
    ];
}
