@extends('layouts.admin')
@section('content')

@php
    $string1 = rand(1, 10);
    if($string1 == 1)
        $recommmed = 'method of lecture';
    elseif($string1 == 2)
        $recommmed = 'Audio-visual technology law';
    elseif($string1 == 3)
        $recommmed = 'discussion method';
    elseif($string1 == 4)
        $recommmed = 'Case study method';
    elseif($string1 == 5)
        $recommmed = 'Role playing method';
    elseif($string1 == 6)
        $recommmed = 'Self-study method';
    elseif($string1 == 7)
        $recommmed = 'Interactive group method';
    elseif($string1 == 8)
        $recommmed = 'Network training method';
    elseif($string1 == 9)
        $recommmed = 'Individual guidance method';
    elseif($string1 == 10)
        $recommmed = 'Scene restoration method';

@endphp

@foreach($evalus as $evalu)
<div class="card">
    <div class="card-header">
        <h5>Evaluation Detail</h5>
    </div>
    <div class="card-body">
        <div class="form-group">
            <a class="btn btn-default" href="{{ route('admin.Project.EvaluationAdmin') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <div class="table-responsive" style="overflow-x: hidden">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 450px;">Item</th>
                        <th>Score</th>
                    </tr>
                </thead>
                    <tbody>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Job Knowledge</b>
                                </td>
                                <td style="text-align: center;padding-top:40px;padding-bottom:40px;">
                                    <input type="range" min="0" max="100" value="{{ $evalu->Knowledge }}" style="width: 1010px;margin-right: 80px;" readonly>
                                    <div class="lineContainer">
                                        <div class="linestart"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="numberContainer" style="left: 5px;">
                                            <div class="numberLeftEnd"></div>
                                            <div class="number" style="width: 32px;">0</div>
                                            <div class="number" style="margin-left: 40px;">10</div>
                                            <div class="number" style="margin-left: 20px;">20</div>
                                            <div class="number" style="margin-left: 21px;">30</div>
                                            <div class="number" style="margin-left: 21px;">40</div>
                                            <div class="number" style="margin-left: 20px;">50</div>
                                            <div class="number" style="margin-left: 20px;">60</div>
                                            <div class="number" style="margin-left: 20px;">70</div>
                                            <div class="number" style="margin-left: 21px;">80</div>
                                            <div class="number" style="margin-left: 20px;">90</div>
                                            <div class="number" style="margin-left: 40px; width: 32px;">100</div>
                                        </div>
                                        <div style="height: 30px;"></div>
                                        <div class="linestart"></div>
                                        <!-- 1 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 2 -->
                                        <div class="linedown"></div>
                                        <!-- 3 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 4 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 5 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 6 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <!-- 7 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 8 -->
                                        <div class="linedown"></div>
                                        <!-- 9 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 10 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <br>
                                        <div style="text-align: left;">
                                            <b style="margin-left: 115px;">Bad</b>
                                            <b style="margin-left: 260px;">Normal</b>
                                            <b style="margin-left: 255px;">Good</b>
                                            <b style="margin-left: 142px;">Very Good</b>
                                        </div>
                                        <div class="score"><b>{{ $evalu->Knowledge }}</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Quality of Work</b>
                                </td>
                                <td style="text-align: center;padding-top:40px;padding-bottom:40px;">
                                    <input type="range" min="0" max="100" value="{{ $evalu->Quality }}" style="width: 1010px;margin-right: 80px;" readonly>
                                    <div class="lineContainer">
                                        <div class="linestart"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="numberContainer" style="left: 5px;">
                                            <div class="numberLeftEnd"></div>
                                            <div class="number" style="width: 32px;">0</div>
                                            <div class="number" style="margin-left: 40px;">10</div>
                                            <div class="number" style="margin-left: 20px;">20</div>
                                            <div class="number" style="margin-left: 21px;">30</div>
                                            <div class="number" style="margin-left: 21px;">40</div>
                                            <div class="number" style="margin-left: 20px;">50</div>
                                            <div class="number" style="margin-left: 20px;">60</div>
                                            <div class="number" style="margin-left: 20px;">70</div>
                                            <div class="number" style="margin-left: 21px;">80</div>
                                            <div class="number" style="margin-left: 20px;">90</div>
                                            <div class="number" style="margin-left: 40px; width: 32px;">100</div>
                                        </div>
                                        <div style="height: 30px;"></div>
                                        <div class="linestart"></div>
                                        <!-- 1 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 2 -->
                                        <div class="linedown"></div>
                                        <!-- 3 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 4 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 5 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 6 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <!-- 7 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 8 -->
                                        <div class="linedown"></div>
                                        <!-- 9 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 10 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <br>
                                        <div style="text-align: left;">
                                            <b style="margin-left: 115px;">Bad</b>
                                            <b style="margin-left: 260px;">Normal</b>
                                            <b style="margin-left: 255px;">Good</b>
                                            <b style="margin-left: 142px;">Very Good</b>
                                        </div>
                                        <div class="score"><b>{{ $evalu->Quality }}</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Productivity</b>
                                </td>
                                <td style="text-align: center;padding-top:40px;padding-bottom:40px;">
                                    <input type="range" min="0" max="100" value="{{ $evalu->Productivity }}" style="width: 1010px;margin-right: 80px;" readonly>
                                    <div class="lineContainer">
                                        <div class="linestart"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="numberContainer" style="left: 5px;">
                                            <div class="numberLeftEnd"></div>
                                            <div class="number" style="width: 32px;">0</div>
                                            <div class="number" style="margin-left: 40px;">10</div>
                                            <div class="number" style="margin-left: 20px;">20</div>
                                            <div class="number" style="margin-left: 21px;">30</div>
                                            <div class="number" style="margin-left: 21px;">40</div>
                                            <div class="number" style="margin-left: 20px;">50</div>
                                            <div class="number" style="margin-left: 20px;">60</div>
                                            <div class="number" style="margin-left: 20px;">70</div>
                                            <div class="number" style="margin-left: 21px;">80</div>
                                            <div class="number" style="margin-left: 20px;">90</div>
                                            <div class="number" style="margin-left: 40px; width: 32px;">100</div>
                                        </div>
                                        <div style="height: 30px;"></div>
                                        <div class="linestart"></div>
                                        <!-- 1 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 2 -->
                                        <div class="linedown"></div>
                                        <!-- 3 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 4 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 5 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 6 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <!-- 7 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 8 -->
                                        <div class="linedown"></div>
                                        <!-- 9 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 10 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <br>
                                        <div style="text-align: left;">
                                            <b style="margin-left: 115px;">Bad</b>
                                            <b style="margin-left: 260px;">Normal</b>
                                            <b style="margin-left: 255px;">Good</b>
                                            <b style="margin-left: 142px;">Very Good</b>
                                        </div>
                                        <div class="score"><b>{{ $evalu->Productivity }}</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Dependability</b>
                                </td>
                                <td style="text-align: center;padding-top:40px;padding-bottom:40px;">
                                    <input type="range" min="0" max="100" value="{{ $evalu->Dependability }}" style="width: 1010px;margin-right: 80px;" readonly>
                                    <div class="lineContainer">
                                        <div class="linestart"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="numberContainer" style="left: 5px;">
                                            <div class="numberLeftEnd"></div>
                                            <div class="number" style="width: 32px;">0</div>
                                            <div class="number" style="margin-left: 40px;">10</div>
                                            <div class="number" style="margin-left: 20px;">20</div>
                                            <div class="number" style="margin-left: 21px;">30</div>
                                            <div class="number" style="margin-left: 21px;">40</div>
                                            <div class="number" style="margin-left: 20px;">50</div>
                                            <div class="number" style="margin-left: 20px;">60</div>
                                            <div class="number" style="margin-left: 20px;">70</div>
                                            <div class="number" style="margin-left: 21px;">80</div>
                                            <div class="number" style="margin-left: 20px;">90</div>
                                            <div class="number" style="margin-left: 40px; width: 32px;">100</div>
                                        </div>
                                        <div style="height: 30px;"></div>
                                        <div class="linestart"></div>
                                        <!-- 1 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 2 -->
                                        <div class="linedown"></div>
                                        <!-- 3 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 4 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 5 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 6 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <!-- 7 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 8 -->
                                        <div class="linedown"></div>
                                        <!-- 9 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 10 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <br>
                                        <div style="text-align: left;">
                                            <b style="margin-left: 115px;">Bad</b>
                                            <b style="margin-left: 260px;">Normal</b>
                                            <b style="margin-left: 255px;">Good</b>
                                            <b style="margin-left: 142px;">Very Good</b>
                                        </div>
                                        <div class="score"><b>{{ $evalu->Dependability }}</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Attendance</b>
                                </td>
                                <td style="text-align: center;padding-top:40px;padding-bottom:40px;">
                                    <input type="range" min="0" max="100" value="{{ $evalu->Attendance }}" style="width: 1010px;margin-right: 80px;" readonly>
                                    <div class="lineContainer">
                                        <div class="linestart"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="numberContainer" style="left: 5px;">
                                            <div class="numberLeftEnd"></div>
                                            <div class="number" style="width: 32px;">0</div>
                                            <div class="number" style="margin-left: 40px;">10</div>
                                            <div class="number" style="margin-left: 20px;">20</div>
                                            <div class="number" style="margin-left: 21px;">30</div>
                                            <div class="number" style="margin-left: 21px;">40</div>
                                            <div class="number" style="margin-left: 20px;">50</div>
                                            <div class="number" style="margin-left: 20px;">60</div>
                                            <div class="number" style="margin-left: 20px;">70</div>
                                            <div class="number" style="margin-left: 21px;">80</div>
                                            <div class="number" style="margin-left: 20px;">90</div>
                                            <div class="number" style="margin-left: 40px; width: 32px;">100</div>
                                        </div>
                                        <div style="height: 30px;"></div>
                                        <div class="linestart"></div>
                                        <!-- 1 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 2 -->
                                        <div class="linedown"></div>
                                        <!-- 3 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 4 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 5 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 6 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <!-- 7 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 8 -->
                                        <div class="linedown"></div>
                                        <!-- 9 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 10 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <br>
                                        <div style="text-align: left;">
                                            <b style="margin-left: 115px;">Bad</b>
                                            <b style="margin-left: 260px;">Normal</b>
                                            <b style="margin-left: 255px;">Good</b>
                                            <b style="margin-left: 142px;">Very Good</b>
                                        </div>
                                        <div class="score"><b>{{ $evalu->Attendance }}</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Relations with Others</b>
                                </td>
                                <td style="text-align: center;padding-top:40px;padding-bottom:40px;">
                                    <input type="range" min="0" max="100" value="{{ $evalu->Relations }}" style="width: 1010px;margin-right: 80px;" readonly>
                                    <div class="lineContainer">
                                        <div class="linestart"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="numberContainer" style="left: 5px;">
                                            <div class="numberLeftEnd"></div>
                                            <div class="number" style="width: 32px;">0</div>
                                            <div class="number" style="margin-left: 40px;">10</div>
                                            <div class="number" style="margin-left: 20px;">20</div>
                                            <div class="number" style="margin-left: 21px;">30</div>
                                            <div class="number" style="margin-left: 21px;">40</div>
                                            <div class="number" style="margin-left: 20px;">50</div>
                                            <div class="number" style="margin-left: 20px;">60</div>
                                            <div class="number" style="margin-left: 20px;">70</div>
                                            <div class="number" style="margin-left: 21px;">80</div>
                                            <div class="number" style="margin-left: 20px;">90</div>
                                            <div class="number" style="margin-left: 40px; width: 32px;">100</div>
                                        </div>
                                        <div style="height: 30px;"></div>
                                        <div class="linestart"></div>
                                        <!-- 1 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 2 -->
                                        <div class="linedown"></div>
                                        <!-- 3 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 4 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 5 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 6 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <!-- 7 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 8 -->
                                        <div class="linedown"></div>
                                        <!-- 9 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 10 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <br>
                                        <div style="text-align: left;">
                                            <b style="margin-left: 115px;">Bad</b>
                                            <b style="margin-left: 260px;">Normal</b>
                                            <b style="margin-left: 255px;">Good</b>
                                            <b style="margin-left: 142px;">Very Good</b>
                                        </div>
                                        <div class="score"><b>{{ $evalu->Relations }}</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Commitment to Safety</b>
                                </td>
                                <td style="text-align: center;padding-top:40px;padding-bottom:40px;">
                                    <input type="range" min="0" max="100" value="{{ $evalu->Commitment }}" style="width: 1010px;margin-right: 80px;" readonly>
                                    <div class="lineContainer">
                                        <div class="linestart"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="numberContainer" style="left: 5px;">
                                            <div class="numberLeftEnd"></div>
                                            <div class="number" style="width: 32px;">0</div>
                                            <div class="number" style="margin-left: 40px;">10</div>
                                            <div class="number" style="margin-left: 20px;">20</div>
                                            <div class="number" style="margin-left: 21px;">30</div>
                                            <div class="number" style="margin-left: 21px;">40</div>
                                            <div class="number" style="margin-left: 20px;">50</div>
                                            <div class="number" style="margin-left: 20px;">60</div>
                                            <div class="number" style="margin-left: 20px;">70</div>
                                            <div class="number" style="margin-left: 21px;">80</div>
                                            <div class="number" style="margin-left: 20px;">90</div>
                                            <div class="number" style="margin-left: 40px; width: 32px;">100</div>
                                        </div>
                                        <div style="height: 30px;"></div>
                                        <div class="linestart"></div>
                                        <!-- 1 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 2 -->
                                        <div class="linedown"></div>
                                        <!-- 3 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 4 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 5 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 6 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <!-- 7 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 8 -->
                                        <div class="linedown"></div>
                                        <!-- 9 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 10 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <br>
                                        <div style="text-align: left;">
                                            <b style="margin-left: 115px;">Bad</b>
                                            <b style="margin-left: 260px;">Normal</b>
                                            <b style="margin-left: 255px;">Good</b>
                                            <b style="margin-left: 142px;">Very Good</b>
                                        </div>
                                        <div class="score"><b>{{ $evalu->Commitment }}</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <b style="font-size: 25px;">Supervisory Ability</b>
                                </td>
                                <td style="text-align: center;padding-top:40px;padding-bottom:40px;">
                                    <input type="range" min="0" max="100" value="{{ $evalu->Supervisory }}" style="width: 1010px;margin-right: 80px;" readonly>
                                    <div class="lineContainer">
                                        <div class="linestart"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="numberContainer" style="left: 5px;">
                                            <div class="numberLeftEnd"></div>
                                            <div class="number" style="width: 32px;">0</div>
                                            <div class="number" style="margin-left: 40px;">10</div>
                                            <div class="number" style="margin-left: 20px;">20</div>
                                            <div class="number" style="margin-left: 21px;">30</div>
                                            <div class="number" style="margin-left: 21px;">40</div>
                                            <div class="number" style="margin-left: 20px;">50</div>
                                            <div class="number" style="margin-left: 20px;">60</div>
                                            <div class="number" style="margin-left: 20px;">70</div>
                                            <div class="number" style="margin-left: 21px;">80</div>
                                            <div class="number" style="margin-left: 20px;">90</div>
                                            <div class="number" style="margin-left: 40px; width: 32px;">100</div>
                                        </div>
                                        <div style="height: 30px;"></div>
                                        <div class="linestart"></div>
                                        <!-- 1 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 2 -->
                                        <div class="linedown"></div>
                                        <!-- 3 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 4 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 5 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 6 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <!-- 7 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 8 -->
                                        <div class="linedown"></div>
                                        <!-- 9 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 10 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <br>
                                        <div style="text-align: left;">
                                            <b style="margin-left: 115px;">Bad</b>
                                            <b style="margin-left: 260px;">Normal</b>
                                            <b style="margin-left: 255px;">Good</b>
                                            <b style="margin-left: 142px;">Very Good</b>
                                        </div>
                                        <div class="score"><b>{{ $evalu->Supervisory }}</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="height: 100px;">
                                    <p><b style="font-size: 25px;">Overall Appraisal Rating</b></p>
                                </td>
                                <td style="text-align: center;padding-top:40px;padding-bottom:40px;">
                                    <input type="range" min="0" max="100" value="{{ $evalu->Appraisal }}" style="width: 1010px;margin-right: 80px;" readonly>
                                    <div class="lineContainer">
                                        <div class="linestart"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="numberContainer" style="left: 5px;">
                                            <div class="numberLeftEnd"></div>
                                            <div class="number" style="width: 32px;">0</div>
                                            <div class="number" style="margin-left: 40px;">10</div>
                                            <div class="number" style="margin-left: 20px;">20</div>
                                            <div class="number" style="margin-left: 21px;">30</div>
                                            <div class="number" style="margin-left: 21px;">40</div>
                                            <div class="number" style="margin-left: 20px;">50</div>
                                            <div class="number" style="margin-left: 20px;">60</div>
                                            <div class="number" style="margin-left: 20px;">70</div>
                                            <div class="number" style="margin-left: 21px;">80</div>
                                            <div class="number" style="margin-left: 20px;">90</div>
                                            <div class="number" style="margin-left: 40px; width: 32px;">100</div>
                                        </div>
                                        <div style="height: 30px;"></div>
                                        <div class="linestart"></div>
                                        <!-- 1 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 2 -->
                                        <div class="linedown"></div>
                                        <!-- 3 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 4 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 5 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 6 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <!-- 7 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 8 -->
                                        <div class="linedown"></div>
                                        <!-- 9 -->
                                        <div class="lineNoRight"></div>
                                        <!-- 10 -->
                                        <div class="linedown" style="width: 100.5px;"></div>
                                        <br>
                                        <div style="text-align: left;">
                                            <b style="margin-left: 115px;">Bad</b>
                                            <b style="margin-left: 260px;">Normal</b>
                                            <b style="margin-left: 255px;">Good</b>
                                            <b style="margin-left: 142px;">Very Good</b>
                                        </div>
                                        <div class="score"><b>{{ $evalu->Appraisal }}</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h2><b>Total Score: {{$evalu->TotalScore}}/100</b></h2>
                                </td>
                            </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>

@if($evalu->TotalScore2 == null)
<div class="card">
    <div class="card-header">
        Fill in the Training Plan
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <form action="{{ route('admin.Project.EvaluationAdminSubmit', ['id' => $evalu->id]) }}" method="post">
                        @csrf
                        <tr>
                            <th style="width: 600px">
                                Employee Name
                            </th>
                            <td>
                                {{ $evalu->employee_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Total Score
                            </th>
                            <td>
                                {{$evalu->TotalScore}}/100
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Recommended Training Plan
                            </th>
                            <td>
                                {{ $recommmed }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Training Plan
                            </th>
                            <td>
                                <select name="TrainPlan" id="" class="form-control">
                                    <option value="">Select His Plan</option>
                                    <option value="1">Method of lecture</option>
                                    <option value="2">Audio-visual technology law</option>
                                    <option value="3">Discussion method</option>
                                    <option value="4">Case study method</option>
                                    <option value="5">Role playing method</option>
                                    <option value="6">Self-study method</option>
                                    <option value="7">Interactive group method</option>
                                    <option value="8">Network training method</option>
                                    <option value="9">Individual guidance method</option>
                                    <option value="10">Scene restoration method</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Deadline</th>
                            <input type="hidden" name="employee_name" value="{{ $evalu->username }}">
                            <input type="hidden" name="employee_email" value="{{ $evalu->useremail }}">
                            <td><input type="date" name="deadline" id="deadline" class="form-control" style="width: 220px;"></td>
                        </tr>
                        <tr>
                            <th>Submit</th>
                            <td><input type="submit" value="Submit" class="button"></td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
@else
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
@endforeach
@endif
@endforeach
@endsection