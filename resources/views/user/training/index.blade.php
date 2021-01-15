@extends('layouts.admin') 
@section('content')

<div class="card">
    <div class="card-header">
        Training Plan {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Lesson">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.lesson.fields.id') }}
                        </th>
                        <th>
                            Plan Name
                        </th>
                        <th>
                            Deadline
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evaluations as $evaluation)
                        @if($evaluation->TrainPlan != 0)
                            <tr>
                                <td>
                                    {{ $loop -> index+1 }}
                                </td>
                                <td>
                                    @if($evaluation->TrainPlan == 1)
                                        Method of lecture
                                    @elseif($evaluation->TrainPlan == 2)
                                        Audio-visual technology law
                                    @elseif($evaluation->TrainPlan == 3)
                                        Discussion method
                                    @elseif($evaluation->TrainPlan == 4)
                                        Case study method
                                    @elseif($evaluation->TrainPlan == 5)
                                        Role playing method
                                    @elseif($evaluation->TrainPlan == 6)
                                        Self-study method
                                    @elseif($evaluation->TrainPlan == 7)
                                        Interactive group method
                                    @elseif($evaluation->TrainPlan == 8)
                                        Network training method
                                    @elseif($evaluation->TrainPlan == 9)
                                        Individual guidance method
                                    @elseif($evaluation->TrainPlan == 10)
                                        Scene restoration method
                                    @endif
                                </td>
                                <td>
                                    {{ $evaluation->deadline }}
                                </td>
                                <td>
                                    @if($evaluation->status == 1)
                                        <span class="badge badge-pill badge-success">Already Finished</span>
                                    @elseif($evaluation->status == null)
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.Project.EvaluationEmployeeloading', ['id' => $evaluation->id]) }}">
                                            Enroll
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection