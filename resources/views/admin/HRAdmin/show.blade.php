@extends('layouts.admin')
@section('content')

@foreach($evalus as $evalu)

<div class="card">
    <div class="card-header">
        <h5>Evaluation Detail</h5>
    </div>
    <div class="card-body">
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
                                    <p style="margin-bottom: 0px;"><b>(One Category must Be Checked)</b></p>
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
                    </tbody>
            </table>
        </div>
    </div>
</div>
<input type="hidden" name="employee_name" value="{{ $evalu->username }}">
<input type="hidden" name="employee_email" value="{{ $evalu->useremail }}">
@endforeach
@endsection