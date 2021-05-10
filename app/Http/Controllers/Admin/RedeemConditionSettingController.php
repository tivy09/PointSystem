<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRedeemConditionSettingRequest;
use App\Http\Requests\StoreRedeemConditionSettingRequest;
use App\Http\Requests\UpdateRedeemConditionSettingRequest;
use App\Models\PointRedeemType;
use App\Models\RedeemConditionSetting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedeemConditionSettingController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('redeem_condition_setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $redeemConditionSettings = RedeemConditionSetting::with(['type'])->get();

        return view('admin.redeemConditionSettings.index', compact('redeemConditionSettings'));
    }

    public function create()
    {
        abort_if(Gate::denies('redeem_condition_setting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = PointRedeemType::all()->pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.redeemConditionSettings.create', compact('types'));
    }

    public function store(StoreRedeemConditionSettingRequest $request)
    {

        return $redeemConditionSetting = RedeemConditionSetting::create($request->all());

        return redirect()->route('admin.redeem-condition-settings.index');
    }

    public function edit(RedeemConditionSetting $redeemConditionSetting)
    {
        abort_if(Gate::denies('redeem_condition_setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = PointRedeemType::all()->pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $redeemConditionSetting->load('type');

        return view('admin.redeemConditionSettings.edit', compact('types', 'redeemConditionSetting'));
    }

    public function update(UpdateRedeemConditionSettingRequest $request, RedeemConditionSetting $redeemConditionSetting)
    {
        $redeemConditionSetting->update($request->all());

        return redirect()->route('admin.redeem-condition-settings.index');
    }

    public function show(RedeemConditionSetting $redeemConditionSetting)
    {
        abort_if(Gate::denies('redeem_condition_setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $redeemConditionSetting->load('type');

        return view('admin.redeemConditionSettings.show', compact('redeemConditionSetting'));
    }

    public function destroy(RedeemConditionSetting $redeemConditionSetting)
    {
        abort_if(Gate::denies('redeem_condition_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $redeemConditionSetting->delete();

        return back();
    }

    public function massDestroy(MassDestroyRedeemConditionSettingRequest $request)
    {
        RedeemConditionSetting::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
