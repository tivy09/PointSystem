@extends('layouts.admin') 
@section('content')

<div class="card" style="text-align: center; width: 500px;margin-left: 500px">
    <div class="card-header">
        Training Plan Start
    </div>

    <div class="card-body">
        <p><b>When you start, you must finish the topic. <br></b>You has <b>60 minutes</b> to do the Topic.</p>
        <a href="{{ route('admin.Project.EvaluationEmployeeAnswer', ['id' => $userEvaluationId]) }}" class="button">Start Answer</a>
    </div>
</div>

@endsection