<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePointRedeemTypeRequest;
use App\Http\Requests\UpdatePointRedeemTypeRequest;
use App\Http\Resources\Admin\PointRedeemTypeResource;
use App\Models\PointRedeemType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PointRedeemTypeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('point_redeem_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PointRedeemTypeResource(PointRedeemType::all());
    }

    public function store(StorePointRedeemTypeRequest $request)
    {
        $pointRedeemType = PointRedeemType::create($request->all());

        return (new PointRedeemTypeResource($pointRedeemType))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PointRedeemType $pointRedeemType)
    {
        abort_if(Gate::denies('point_redeem_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PointRedeemTypeResource($pointRedeemType);
    }

    public function update(UpdatePointRedeemTypeRequest $request, PointRedeemType $pointRedeemType)
    {
        $pointRedeemType->update($request->all());

        return (new PointRedeemTypeResource($pointRedeemType))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PointRedeemType $pointRedeemType)
    {
        abort_if(Gate::denies('point_redeem_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pointRedeemType->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
