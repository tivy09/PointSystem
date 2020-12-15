<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    use HasFactory;

    protected $fillable=['employee_id', 'Salary_amount'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function salary(){
        return $this->belongTo('App\Salary');
    }
    public function leave()
    {
        return $this->belongsTo('App\leave' ,'days');
    }
}
