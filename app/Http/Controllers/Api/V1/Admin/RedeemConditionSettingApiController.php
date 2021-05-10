<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRedeemConditionSettingRequest;
use App\Http\Requests\UpdateRedeemConditionSettingRequest;
use App\Http\Resources\Admin\RedeemConditionSettingResource;
use App\Models\RedeemConditionSetting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedeemConditionSettingApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('redeem_condition_setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RedeemConditionSettingResource(RedeemConditionSetting::with(['type'])->get());
    }

    public function store(StoreRedeemConditionSettingRequest $request)
    {
        $redeemConditionSetting = RedeemConditionSetting::create($request->all());

        return (new RedeemConditionSettingResource($redeemConditionSetting))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(RedeemConditionSetting $redeemConditionSetting)
    {
        abort_if(Gate::denies('redeem_condition_setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RedeemConditionSettingResource($redeemConditionSetting->load(['type']));
    }

    public function update(UpdateRedeemConditionSettingRequest $request, RedeemConditionSetting $redeemConditionSetting)
    {
        $redeemConditionSetting->update($request->all());

        return (new RedeemConditionSettingResource($redeemConditionSetting))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(RedeemConditionSetting $redeemConditionSetting)
    {
        abort_if(Gate::denies('redeem_condition_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $redeemConditionSetting->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
