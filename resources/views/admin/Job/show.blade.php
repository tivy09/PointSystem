@extends('layouts.admin')
@section('content')
@foreach($jobs as $job)
<Style>
    th{
        width: 150px;
    }
</Style>
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.role.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.Job.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                            {{ $job->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                            {{ $job->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Age
                        </th>
                        <td>
                            {{ $job->age }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $job->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Phone number
                        </th>
                        <td>
                            {{ $job->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Interview Position
                        </th>
                        <td>
                            {{ $job->PosiName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Resume
                        </th>
                        <td>
                            <a href="{{ asset('resemu/' )}}/{{ $job->file }}" target="_blank">View Resume</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Letter
                        </th>
                        <td>
                            @if($job->letter != null)
                                {{ $job->letter }}
                            @else
                                <p>{{ $job->name }} {{ $job->age }} Spring Street Anycity, NY 12000 555-122-3333 {{ $job->email }}</p>
                                <p>August 1, 2018</p>
                                <p>John Brown Sales Manager Acme Corp. 321 Main Street Anycity, NY 12000</p>
                                <p>Dear Mr. Brown,</p>
                                <p>I wish to apply for the sales position advertised on Monster.com. Terry Johnson suggested that I contact you directly, as we have worked together, and he felt that I would be a good fit with your team.</p>
                                <p>For the past two years I have been working in sales for Goodman &amp; Co.. I have consistently exceeded my targets and I was recognized last quarter for outstanding service. As an avid cyclist and user of many of your products, I'm aware that
                                Acme Corp. is a company with tremendous potential. I am confident that my experience, communication skills, and ability to convey product benefits effectively would enable me to excel in the sales role.</p>
                                <p>I would be delighted to discuss with you how I might be an asset to the Acme Corp. sales team. Thank you for your consideration; I look forward to hearing from you.</p>
                                <p>Respectfully yours,</p>
                                <p>{{ $job->name }}</p>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status
                        </th>
                        <td>
                            @if($job->is_approved == null)
                                <form action="{{ route('admin.Job.approved', ['id' => $job->id]) }}" method="post">
                                    @csrf
                                    <select class="form-control" name="status" id="">
                                            <option value="">Select Your Status</option>
                                        @foreach($hirings as $hiring)
                                            <option value="{{$hiring->id}}">{{$hiring->name}}</option>
                                        @endforeach
                                    </select><br>
                                    <input class="btn btn-danger" type="submit" style="margin-left: 750px;">
                                </form>
                            @else
                                {{ $job->HiriName }}
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach
@endsection