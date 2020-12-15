<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendar extends Model
{
    use HasFactory;

    protected $table = 'calendars';
    protected $fillable = ['title','color','start_date','end_date'];
    public function addEvents(){
        return $this->belongsTo('App\calendar');
    }
}
