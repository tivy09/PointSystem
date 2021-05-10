<?php

namespace App\Http\Requests;

use App\Models\RedeemConditionSetting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRedeemConditionSettingRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('redeem_condition_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:redeem_condition_settings,id',
        ];
    }
}
