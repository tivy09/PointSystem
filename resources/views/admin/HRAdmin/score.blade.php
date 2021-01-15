@extends('layouts.admin')
@section('content')
@foreach($indexs as $index)
<div class="card">
    <div class="card-header">
        Question Answer
    </div>

    <div class="card-body">
            @if($index->questionNum == 1)
                <div class="form-group">
                    <label for="question1">The enterprise spirit of our company is:</label>
                    <input type="text" class="form-control" name="question1" value="{{ $index->question1 }}" readonly>
                </div><br>
                <div class="form-group">
                    <label for="question2">How does our company pay insurance?</label>
                    <input type="text" class="form-control" name="question2" value="{{ $index->question2 }}" readonly>
                </div><br>
                <div class="form-group">
                    <label for="question3">The correct statement of our company's salary system is:</label>
                    <input type="text" class="form-control" name="question3" value="{{ $index->question3 }}" readonly>
                </div><br>
                <div class="form-group">
                    <label for="question4">When new employees fill in the Application Resume, they need to fill in or submit materials truthfully?</label>
                    <input type="text" class="form-control" name="question4" value="{{ $index->question4 }}" readonly>
                </div><br>
            @elseif($index->questionNum == 2)
                <div class="form-group">
                    <label for="question5">What are the employees' leave requirements in the Employee Code?</label>
                    <input type="text" class="form-control" name="question1" value="{{ $index->question1 }}" readonly readonly>
                </div><br>
                <div class="form-group">
                    <label for="question6">What are the penalties for violating the rules and regulations of employees? How much is the fine?</label>
                    <input type="text" class="form-control" name="question2" value="{{ $index->question2 }}" readonly>
                </div><br>
                <div class="form-group">
                    <label for="question7">Employees of this company may not sign labor contracts.</label>
                    <input type="text" class="form-control" name="question3" value="{{ $index->question3 }}" readonly>
                </div><br>
                <div class="form-group">
                    <label for="question8">The labor contract shall be signed with the employee himself.</label>
                    <input type="text" class="form-control" name="question4" value="{{ $index->question4 }}" readonly>
                </div><br>
            @elseif($index->questionNum == 3)
                <div class="form-group9">
                    <label for="question">In violation of company regulations, there is no violation of rules and regulations, and those who are verified to be true can be given a warning.</label>
                    <input type="text" class="form-control" name="question1" value="{{ $index->question1 }}" readonly readonly>
                </div><br>
                <div class="form-group10">
                    <label for="question">In order to encourage beneficial behaviors, motivate employees' work enthusiasm, gather team strength and improve work efficiency, the company will commend employees if they meet the requirements.</label>
                    <input type="text" class="form-control" name="question2" value="{{ $index->question2 }}" readonly>
                </div><br>
                <div class="form-group11">
                    <label for="question">The company encourages employees to finish their work within normal working hours. If employees need to work overtime due to the company's production tasks, employees must work overtime.</label>
                    <input type="text" class="form-control" name="question3" value="{{ $index->question3 }}" readonly>
                </div><br>
                <div class="form-group12">
                    <label for="question">Employees can ask someone to clock in or take someone else to clock in.</label>
                    <input type="text" class="form-control" name="question4" value="{{ $index->question4 }}" readonly>
                </div><br>
            @endif
    </div>
</div>

<div class="card">
    <div class="card-header">
        Marking Score
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Lesson">
                <thead>
                    <tr>
                        <th>
                            Employee Name
                        </th>
                        <th>
                            Total Score
                        </th>
                        <th>
                            Feedback
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <form action="{{ route('admin.Project.EvaluationAdminScore', ['id' => $index->id]) }}" method="post">
                        @csrf
                        <tr>
                            <td>
                                {{ $index->employee_name }}
                            </td>
                            <td>
                                <input type="text" name="totalscore" id="" min="30" max="100" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="feedback" id="" class="form-control">
                            </td>
                            <td style="text-align: left;">
                                <input type="hidden" name="evaluations_id" value="{{$index->evaluations_id}}">
                                <input type="hidden" name="employee_email" value="{{ $index->useremail }}">
                                <input type="submit" value="Submit" class="button">
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach
@endsection