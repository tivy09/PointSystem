<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPointRequest;
use App\Http\Requests\StorePointRequest;
use App\Http\Requests\UpdatePointRequest;
use App\Models\Point;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PointController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('point_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $points = Point::with(['user'])->get();

        return view('admin.points.index', compact('points'));
    }

    public function create()
    {
        abort_if(Gate::denies('point_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('point', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.points.create', compact('users'));
    }

    public function store(StorePointRequest $request)
    {
        $point = Point::create($request->all());

        return redirect()->route('admin.points.index');
    }

    public function edit(Point $point)
    {
        abort_if(Gate::denies('point_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('point', 'id')->prepend(trans('global.pleaseSelect'), '');

        $point->load('user');

        return view('admin.points.edit', compact('users', 'point'));
    }

    public function update(UpdatePointRequest $request, Point $point)
    {
        $point->update($request->all());

        return redirect()->route('admin.points.index');
    }

    public function show(Point $point)
    {
        abort_if(Gate::denies('point_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $point->load('user');

        return view('admin.points.show', compact('point'));
    }

    public function destroy(Point $point)
    {
        abort_if(Gate::denies('point_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $point->delete();

        return back();
    }

    public function massDestroy(MassDestroyPointRequest $request)
    {
        Point::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
