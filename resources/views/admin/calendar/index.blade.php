@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("calendar.add") }}">
                {{ trans('global.add') }} Event
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        Event {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Lesson">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.lesson.fields.id') }}
                        </th>
                        <th>
                            Event Title
                        </th>
                        <th>
                            Start Day
                        </th>
                        <th>
                            End Day
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($calendar as $event)
                        <tr>
                            <td></td>
                            <td>
                                {{ $loop -> index+1 }}
                            </td>
                            <td>
                                {{ $event->title ?? '' }}
                            </td>
                            <td>
                                {{ $event->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $event->end_date ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.calendar.edit', ['id' => $event->id]) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                <a href="{{ route('admin.calendar.destroy', ['id' => $event->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')">
                                    {{ trans('global.delete') }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection