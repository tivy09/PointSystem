<?php

namespace App\Http\Requests;

use App\Models\PointSetting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePointSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('point_setting_create');
    }

    public function rules()
    {
        return [
            'exchange_rate' => [
                'numeric',
                'required',
            ],
            'earn_amount' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'enable' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'display' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'point_period' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'point_status' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'point_activate_period' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'point_activate_date' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'earn_rate' => [
                'numeric',
            ],
        ];
    }
}
