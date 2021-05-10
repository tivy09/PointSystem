<?php

namespace App\Http\Requests;

use App\Models\PointRedeemType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPointRedeemTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('point_redeem_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:point_redeem_types,id',
        ];
    }
}
