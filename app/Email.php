<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use SoftDeletes;

    public $table = 'emails';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'to_email',
        'form_email',
        'EmailSender',
        'Email_title',
        'Email_MSG',
        'Email_file',
        'created_at',
        'updated_at',
    ];

    public function Emails()
    {
        return $this->belongTo('App/Email');
    }
}
