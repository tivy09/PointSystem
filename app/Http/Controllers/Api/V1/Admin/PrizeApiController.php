<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StorePrizeRequest;
use App\Http\Requests\UpdatePrizeRequest;
use App\Http\Resources\Admin\PrizeResource;
use App\Models\Prize;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PrizeApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('prize_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PrizeResource(Prize::with(['type'])->get());
    }

    public function store(StorePrizeRequest $request)
    {
        $prize = Prize::create($request->all());

        if ($request->input('image', false)) {
            $prize->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        return (new PrizeResource($prize))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Prize $prize)
    {
        abort_if(Gate::denies('prize_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PrizeResource($prize->load(['type']));
    }

    public function update(UpdatePrizeRequest $request, Prize $prize)
    {
        $prize->update($request->all());

        if ($request->input('image', false)) {
            if (!$prize->image || $request->input('image') !== $prize->image->file_name) {
                if ($prize->image) {
                    $prize->image->delete();
                }
                $prize->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($prize->image) {
            $prize->image->delete();
        }

        return (new PrizeResource($prize))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Prize $prize)
    {
        abort_if(Gate::denies('prize_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prize->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
