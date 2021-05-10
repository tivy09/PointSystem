<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPointRedeemTypeRequest;
use App\Http\Requests\StorePointRedeemTypeRequest;
use App\Http\Requests\UpdatePointRedeemTypeRequest;
use App\Models\PointRedeemType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PointRedeemTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('point_redeem_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pointRedeemTypes = PointRedeemType::all();

        return view('admin.pointRedeemTypes.index', compact('pointRedeemTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('point_redeem_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pointRedeemTypes.create');
    }

    public function store(StorePointRedeemTypeRequest $request)
    {
        return $request->all();
        $pointRedeemType = PointRedeemType::create($request->all());

        return redirect()->route('admin.point-redeem-types.index');
    }

    public function edit(PointRedeemType $pointRedeemType)
    {
        abort_if(Gate::denies('point_redeem_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pointRedeemTypes.edit', compact('pointRedeemType'));
    }

    public function update(UpdatePointRedeemTypeRequest $request, PointRedeemType $pointRedeemType)
    {
        $pointRedeemType->update($request->all());

        return redirect()->route('admin.point-redeem-types.index');
    }

    public function show(PointRedeemType $pointRedeemType)
    {
        abort_if(Gate::denies('point_redeem_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pointRedeemTypes.show', compact('pointRedeemType'));
    }

    public function destroy(PointRedeemType $pointRedeemType)
    {
        abort_if(Gate::denies('point_redeem_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pointRedeemType->delete();

        return back();
    }

    public function massDestroy(MassDestroyPointRedeemTypeRequest $request)
    {
        PointRedeemType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
