@extends('layouts.app')

@section('content')

<link href="{{ asset('css/loginStyle.css') }}" rel="stylesheet">

<div class="main">
    <div class="box">
        <p id="welcome">Welcome</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <p>Email address</p>
        <input name = "number" id = "email" type="email" placeholder="  e.g staff.wlv.ac.uk" required>
        <p>Password</p>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="current-password">
        {{-- <input type="Password" placeholder="Password" required> --}}
       
        <a style=" text-decoration: none;
        font-size: 14px;
        color: #26226E;
        display: block;
        margin-left: 40%;" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
       
        <button type="submit" class="button">Login</button>
        <a  href="/student-login">student login</a>
        </form>
    </div>
</div>

@endsection