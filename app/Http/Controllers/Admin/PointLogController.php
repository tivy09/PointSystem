<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPointLogRequest;
use App\Http\Requests\StorePointLogRequest;
use App\Http\Requests\UpdatePointLogRequest;
use App\Models\PointLog;
use App\Models\PointRedeemType;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PointLogController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('point_log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pointLogs = PointLog::with(['user', 'type'])->get();

        return view('admin.pointLogs.index', compact('pointLogs'));
    }

    public function create()
    {
        abort_if(Gate::denies('point_log_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $types = PointRedeemType::all()->pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.pointLogs.create', compact('users', 'types'));
    }

    public function store(StorePointLogRequest $request)
    {
        $pointLog = PointLog::create($request->all());

        return redirect()->route('admin.point-logs.index');
    }

    public function edit(PointLog $pointLog)
    {
        abort_if(Gate::denies('point_log_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $types = PointRedeemType::all()->pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $pointLog->load('user', 'type');

        return view('admin.pointLogs.edit', compact('users', 'types', 'pointLog'));
    }

    public function update(UpdatePointLogRequest $request, PointLog $pointLog)
    {
        $pointLog->update($request->all());

        return redirect()->route('admin.point-logs.index');
    }

    public function show(PointLog $pointLog)
    {
        abort_if(Gate::denies('point_log_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pointLog->load('user', 'type');

        return view('admin.pointLogs.show', compact('pointLog'));
    }

    public function destroy(PointLog $pointLog)
    {
        abort_if(Gate::denies('point_log_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pointLog->delete();

        return back();
    }

    public function massDestroy(MassDestroyPointLogRequest $request)
    {
        PointLog::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
