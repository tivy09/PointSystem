<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPointSettingRequest;
use App\Http\Requests\StorePointSettingRequest;
use App\Http\Requests\UpdatePointSettingRequest;
use App\Models\PointSetting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PointSettingsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('point_setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pointSettings = PointSetting::all();

        return view('admin.pointSettings.index', compact('pointSettings'));
    }

    // public function create()
    // {
    //     abort_if(Gate::denies('point_setting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     return view('admin.pointSettings.create');
    // }

    // public function store(StorePointSettingRequest $request)
    // {
    //     $pointSetting = PointSetting::create($request->all());

    //     return redirect()->route('admin.point-settings.index');
    // }

    public function edit(PointSetting $pointSetting)
    {
        abort_if(Gate::denies('point_setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pointSettings.edit', compact('pointSetting'));
    }

    public function update(UpdatePointSettingRequest $request, PointSetting $pointSetting)
    {
        $prize_earn_amount=$request->input('earn_amount');
        $prize->earn_rate = 100 / $prize_earn_amount;
        $pointSetting->update($request->all());

        return redirect()->route('admin.point-settings.index');
    }

    public function show(PointSetting $pointSetting)
    {
        abort_if(Gate::denies('point_setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pointSettings.show', compact('pointSetting'));
    }

    public function destroy(PointSetting $pointSetting)
    {
        abort_if(Gate::denies('point_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pointSetting->delete();

        return back();
    }

    public function massDestroy(MassDestroyPointSettingRequest $request)
    {
        PointSetting::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
