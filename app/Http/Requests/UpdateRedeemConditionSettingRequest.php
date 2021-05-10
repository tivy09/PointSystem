<?php

namespace App\Http\Requests;

use App\Models\RedeemConditionSetting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRedeemConditionSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('redeem_condition_setting_edit');
    }

    public function rules()
    {
        return [
            'min_point_to_redeem' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
