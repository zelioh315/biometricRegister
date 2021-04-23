@extends('layouts.app')

@section('content')
@if(Auth::user()->role == "staff")

<link href="{{ asset('css/staffHomeStyle.css') }}" rel="stylesheet">

    <div class="main">
            <div class="dashboard" id="dashboard">
                <div class="container">
                    <button class="button" onclick="extendEnrol()">Enrol</button>
                    <button class="button" onclick="extendRecord()">Record</br>Attendance</button>
                    <a style="text-decoration:none" href="/attendance" class="button" onclick="extendView()">View</br>Attendance</a>
                </div>
            </div>
    </div>
@else
<link href="{{ asset('css/studentHomeStyle.css') }}" rel="stylesheet">
<div class="main">
    <div class="box">
        <p>Recorded Attendance</p>
        <div class="container"> 
            {{-- <table>
                <tr>
                  <th>Student Name</th>
                  <th>Module Code</th>
                  <th>Module Leader</th>
                  <th>Date and Time</th>
                </tr>
                @foreach ($attendance as $att )
                    <tr>
                    <td>{{$att->student_name}}</td>
                    <td>{{$att->module_code}}</td>
                    <td>{{$att->module_leader}}</td>
                    <td>{{$att->created_at}}</td>
                    </tr>
                @endforeach
            </table> --}}
        </div>
    </div>
</div>
@endif
@endsection