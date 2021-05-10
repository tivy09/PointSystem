<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PointSetting extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'point_settings';

    protected $dates = [
        'point_activate_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'exchange_rate',
        'earn_amount',
        'enable',
        'display',
        'point_period',
        'point_status',
        'point_activate_period',
        'point_activate_date',
        'earn_rate',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getPointActivateDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setPointActivateDateAttribute($value)
    {
        $this->attributes['point_activate_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
