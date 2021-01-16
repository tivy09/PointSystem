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
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Knowledge" class="Exceeds" value="100" id="check1" onclick="Value1(this.id)"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Knowledge" class="Marginal" value="60" id="check2" onclick="Value1(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Knowledge" class="Proficient" value="80" id="check3" onclick="Value1(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Knowledge" class="Below" value="20" id="check4" onclick="Value1(this.id)"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Quality of Work</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Quality" class="Exceeds" value="100" id="check5" onclick="Value2(this.id)"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Quality" class="Marginal" value="60" id="check6" onclick="Value2(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Quality" class="Proficient" value="80" id="check7" onclick="Value2(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Quality" class="Below" value="20" id="check8" onclick="Value2(this.id)"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Productivity</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Productivity" class="Exceeds" value="100" id="check9" onclick="Value3(this.id)"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Productivity" class="Marginal" value="60" id="check10" onclick="Value3(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Productivity" class="Proficient" value="80" id="check11" onclick="Value3(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Productivity" class="Below" value="20" id="check12" onclick="Value3(this.id)"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Dependability</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Dependability" class="Exceeds" value="100" id="check13" onclick="Value4(this.id)"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Dependability" class="Marginal" value="60" id="check14" onclick="Value4(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Dependability" class="Proficient" value="80" id="check15" onclick="Value4(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Dependability" class="Below" value="20" id="check16" onclick="Value4(this.id)"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Attendance</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Attendance" class="Exceeds" value="100" id="check17" onclick="Value5(this.id)"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Attendance" class="Marginal" value="60" id="check18" onclick="Value5(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Attendance" class="Proficient" value="80" id="check19" onclick="Value5(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Attendance" class="Below" value="20" id="check20" onclick="Value5(this.id)"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Relations with Others</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Relations" class="Exceeds" value="100" id="check21" onclick="Value6(this.id)"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Relations" class="Marginal" value="60" id="check22" onclick="Value6(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Relations" class="Proficient" value="80" id="check23" onclick="Value6(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Relations" class="Below" value="20" id="check24" onclick="Value6(this.id)"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Commitment to Safety</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Commitment" class="Exceeds" value="100" id="check25" onclick="Value7(this.id)"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Commitment" class="Marginal" value="60" id="check26" onclick="Value7(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Commitment" class="Proficient" value="80" id="check27" onclick="Value7(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Commitment" class="Below" value="20" id="check28" onclick="Value7(this.id)"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Supervisory Ability</b>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Supervisory" class="Exceeds" value="100" id="check29" onclick="Value8(this.id)"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Supervisory" class="Marginal" value="60" id="check30" onclick="Value8(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Supervisory" class="Proficient" value="80" id="check31" onclick="Value8(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Supervisory" class="Below" value="20" id="check32" onclick="Value8(this.id)"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <p><b style="font-size: 25px;">Overall Appraisal Rating</b></p>
                                    <p style="margin-bottom: 0px;"><b>(One Category must Be Checked)</b></p>
                                </td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Appraisal" class="Exceeds" value="100" id="check33" onclick="Value9(this.id)"><div class="Emoji" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Appraisal" class="Marginal" value="60" id="check34" onclick="Value9(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Appraisal" class="Proficient" value="80" id="check35" onclick="Value9(this.id)"><div class="Emoji1" id="control-me"></div></td>
                                <td style="text-align: center; padding-top: 40px;"><input type="checkbox" name="Appraisal" class="Below" value="20" id="check36" onclick="Value9(this.id)"><div class="Emoji" id="control-me"></div></td>
                            </tr>
                            <tr>
                                <td><p style="font-size: 25px;">Feedback for the {{ $task->User_id }}</p></td>
                                <td colspan="3"><input type="text" name="feedback" id="feedback"></td>
                                <input type="hidden" name="employee_name" value="{{ $task->User_id }}">
                                <input type="hidden" name="employee_email" value="{{ $task->useremail }}">
                                <input type="hidden" name="tasks_id" value="{{$task->tasksID}}">
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