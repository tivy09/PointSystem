@extends('layouts.admin')
@section('content')

@foreach($tasks as $task)

<div class="card">
    <div class="card-header">
        <h5>Evaluation {{ $task->User_id }}</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive" style="overflow-x: hidden">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th rowspan="2" style="max-width: 300px">
                            Instructions: This appraisal for must be completed by the inmmedinte supervisor based on performance standards previously established. If the selected category is "Achieves Standards" the supervisor must indicate the level of rating: M=Marginal or P=Proficient. If the overall is Achieves Standards Marginalor or Below Standards, the supervisor must contact the Employee and Labor Relations Department for assistance in implementing a Performance Improvement Plan.
                        </th>
                        <th rowspan="2" style="text-align: center;">Exceeds Standards</th>
                        <th colspan="2" style="text-align: center;">Achieves Standards</th>
                        <th rowspan="2" style="text-align: center;">Delow Standards</th>
                    </tr>
                    <tr>
                        <th style="text-align: center;">M = Marginal</th>
                        <th style="text-align: center;">P = Proficient</th>
                    </tr>
                </thead>
                <form action="{{ route('admin.Project.storeProjectEvaluation') }}" method="post">
                    @csrf
                    <tbody>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Job Knowledge</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Knowledge" id="Exceeds" value="100"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Knowledge" id="Marginal" value="60"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Knowledge" id="Proficient" value="80"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Knowledge" id="Below" value="20"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Quality of Work</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Quality" id="Exceeds" value="100"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Quality" id="Marginal" value="60"0><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Quality" id="Proficient" value="80"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Quality" id="Below" value="20"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Productivity</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Productivity" id="Exceeds" value="100"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Productivity" id="Marginal" value="60"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Productivity" id="Proficient" value="80"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Productivity" id="Below" value="20"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Dependability</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Dependability" id="Exceeds" value="100"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Dependability" id="Marginal" value="60"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Dependability" id="Proficient" value="80"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Dependability" id="Below" value="20"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Attendance</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Attendance" id="Exceeds" value="100"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Attendance" id="Marginal" value="60"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Attendance" id="Proficient" value="80"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Attendance" id="Below" value="20"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Relations with Others</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Relations" id="Exceeds" value="100"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Relations" id="Marginal" value="60"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Relations" id="Proficient" value="80"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Relations" id="Below" value="20"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Commitment to Safety</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Commitment" id="Exceeds" value="100"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Commitment" id="Marginal" value="60"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Commitment" id="Proficient" value="80"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Commitment" id="Below" value="20"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Supervisory Ability</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Supervisory" id="Exceeds" value="100"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Supervisory" id="Marginal" value="60"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Supervisory" id="Proficient" value="80"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Supervisory" id="Below" value="20"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <p><b style="font-size: 25px;">Overall Appraisal Rating</b></p>
                                    <p style="margin-bottom: 0px;"><b>(One Category must Be Checked)</b></p>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Appraisal" id="Exceeds" value="100"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Appraisal" id="Marginal" value="60"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Appraisal" id="Proficient" value="80"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Appraisal" id="Below" value="20"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td><p style="font-size: 25px;">Feedback for the {{ $task->User_id }}</p></td>
                                <td colspan="3"><input type="text" name="feedback" id="feedback"></td>
                                <input type="hidden" name="employee_name" value="{{ $task->User_id }}">
                                <input type="hidden" name="employee_email" value="{{ $task->useremail }}">
                                <input type="hidden" name="tasksID" value="{{$task->tasksID}}">
                                <input type="hidden" name="project_id" value="{{$task->project_id}}">
                                <td style="padding-top: 10px;"><input type="submit" value="Submit" class="button"></td>
                            </tr>
                    </tbody>
                </form>
            </table>
        </div>
    </div>
</div>

@endforeach
@endsection