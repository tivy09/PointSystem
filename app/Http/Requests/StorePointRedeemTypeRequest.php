<?php

namespace App\Http\Requests;

use App\Models\PointRedeemType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePointRedeemTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('point_redeem_type_create');
    }

    public function rules()
    {
        return [
            'type' => [
                'string',
                'nullable',
            ],
        ];
    }
}
