<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPrizeRequest;
use App\Http\Requests\StorePrizeRequest;
use App\Http\Requests\UpdatePrizeRequest;
use App\Models\PointRedeemType;
use App\Models\PointSetting;
use App\Models\Prize;
use App\Models\RedeemConditionSetting;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PrizeController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('prize_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prizes = Prize::with(['type', 'media'])->get();

        return view('admin.prizes.index', compact('prizes'));
    }

    public function create()
    {
        abort_if(Gate::denies('prize_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = PointRedeemType::all()->pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.prizes.create', compact('types'));
    }

    public function store(StorePrizeRequest $request)
    {
        $prize = new Prize();
        $request->input('type_id') == 1;
        $redeemType = RedeemConditionSetting::find(1);
        if($request->input('point_to_redeem') > $redeemType->min_point_to_redeem){
            if ($request->input('image', false)) {
                $prize->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }

            if ($media = $request->input('ck-media', false)) {
                Media::whereIn('id', $media)->update(['model_id' => $prize->id]);
            }
            $prize = Prize::create($request->all());
            return redirect()->route('admin.prizes.index');
        }else{
            return redirect()->route('admin.prizes.index');
        }
        //get min point to redeem



    }

    public function edit(Prize $prize)
    {
        abort_if(Gate::denies('prize_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = PointRedeemType::all()->pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $prize->load('type');

        return view('admin.prizes.edit', compact('types', 'prize'));
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

        return redirect()->route('admin.prizes.index');
    }

    public function show(Prize $prize)
    {
        abort_if(Gate::denies('prize_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prize->load('type');

        return view('admin.prizes.show', compact('prize'));
    }

    public function destroy(Prize $prize)
    {
        abort_if(Gate::denies('prize_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prize->delete();

        return back();
    }

    public function massDestroy(MassDestroyPrizeRequest $request)
    {
        Prize::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('prize_create') && Gate::denies('prize_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Prize();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
