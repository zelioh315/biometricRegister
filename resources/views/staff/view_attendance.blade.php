@extends('layouts.app')

@section('content')
<link href="{{ asset('css/studentHomeStyle.css') }}" rel="stylesheet">
<div class="main">
    <div class="box">
        <p>Recorded Attendance</p>
        <div class="container"> 
            <table>
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
            </table>
        </div>
    </div>
</div>

@endsection