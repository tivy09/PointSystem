@extends('layouts.admin') 
@section('content')
@php
$string1 = rand(1, 3);
@endphp
<div class="card">
    <div class="card-header">
        Question
        <div>The topic ends in <b><span id="time">60:00</span></b> minutes!</div>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.Project.EvaluationEmployeeStore', ['id' => $userEvaluationId]) }}" method="post">
            @csrf
            @if($string1 == 1)
                <div class="form-group">
                    <label for="question1">The enterprise spirit of our company is:</label>
                    <input type="text" class="form-control" name="question1" placeholder="Write Your Answer">
                </div><br>
                <div class="form-group">
                    <label for="question2">How does our company pay insurance?</label>
                    <input type="text" class="form-control" name="question2" placeholder="Write Your Answer">
                </div><br>
                <div class="form-group">
                    <label for="question3">The correct statement of our company's salary system is:</label>
                    <input type="text" class="form-control" name="question3" placeholder="Write Your Answer">
                </div><br>
                <div class="form-group">
                    <label for="question4">When new employees fill in the Application Resume, they need to fill in or submit materials truthfully?</label>
                    <input type="text" class="form-control" name="question4" placeholder="Write Your Answer">
                </div><br>
            @elseif($string1 == 2)
                <div class="form-group">
                    <label for="question5">What are the employees' leave requirements in the Employee Code?</label>
                    <input type="text" class="form-control" name="question1" placeholder="Write Your Answer">
                </div><br>
                <div class="form-group">
                    <label for="question6">What are the penalties for violating the rules and regulations of employees? How much is the fine?</label>
                    <input type="text" class="form-control" name="question2" placeholder="Write Your Answer">
                </div><br>
                <div class="form-group">
                    <label for="question7">Employees of this company may not sign labor contracts.</label>
                    <input type="text" class="form-control" name="question3" placeholder="YES / NO">
                </div><br>
                <div class="form-group">
                    <label for="question8">The labor contract shall be signed with the employee himself.</label>
                    <input type="text" class="form-control" name="question4" placeholder="YES / NO">
                </div><br>
            @elseif($string1 == 3)
                <div class="form-group9">
                    <label for="question">In violation of company regulations, there is no violation of rules and regulations, and those who are verified to be true can be given a warning.</label>
                    <input type="text" class="form-control" name="question1" placeholder="YES / NO">
                </div><br>
                <div class="form-group10">
                    <label for="question">In order to encourage beneficial behaviors, motivate employees' work enthusiasm, gather team strength and improve work efficiency, the company will commend employees if they meet the requirements.</label>
                    <input type="text" class="form-control" name="question2" placeholder="Write Your Answer">
                </div><br>
                <div class="form-group11">
                    <label for="question">The company encourages employees to finish their work within normal working hours. If employees need to work overtime due to the company's production tasks, employees must work overtime.</label>
                    <input type="text" class="form-control" name="question3" placeholder="Write Your Answer">
                </div><br>
                <div class="form-group12">
                    <label for="question">Employees can ask someone to clock in or take someone else to clock in.</label>
                    <input type="text" class="form-control" name="question4" placeholder="Write Your Answer">
                </div><br>
            @endif
            <div class="form-group">
                <input type="hidden" name="employee_name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="employee_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="questionNum" value="{{ $string1 }}">
                <input type="hidden" name="evaluation_id" value="{{ $userEvaluationId }}">
                <button class="btn btn-danger" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    function startTimer(duration, display) {
        var timer = duration,
            minutes, seconds;
        setInterval(function() {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    window.onload = function() {
        var fiveMinutes = 60 * 60,
            display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };
    // answer = setTimeout(aleat, 3600000);
    // answer = setTimeout(answer, 5000);
    function answer() {
        aleat("Time Out!!!");
        if (confirm("Press a button!")) {
            document.getElementById('id02').style.display = 'none';
            location.href = 'http://localhost:8000/TrainingPlan';
        } else {
            document.getElementById('id02').style.display = 'none';
            location.href = 'http://localhost:8000/TrainingPlan';
        }
    }
</script>
@endsection