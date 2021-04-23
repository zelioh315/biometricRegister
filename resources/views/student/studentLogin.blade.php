@extends('layouts.app')

@section('content')

<link href="{{ asset('css/loginStyle.css') }}" rel="stylesheet">

<div class="main">
    <div class="box">
        <p id="welcome">Welcome</p>
        <p>Student Number</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <input name="number" id = "number"
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number"
        maxlength = "7"  placeholder="Student Number" required
        />
        {{-- <input type="text" maxlength="7"  placeholder="Student Number"> --}}
        <p>Password</p>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="current-password">
        {{-- <a href="">Forgot Password?</a> --}}
        <a style=" text-decoration: none;
        font-size: 14px;
        color: #26226E;
        display: block;
        margin-left: 40%;" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        <a style=" text-decoration: none;
        font-size: 14px;
        color: #26226E;
        display: block;
        margin-left: 40%;" href="/staff-login">staff login</a>
        <button type="submit" class="button">Login</button>
        </form>
    </div>

<div class="footer">
    <p>&copy Online Register | All rights reserved</p>
    <div class="social">
        <a href="https://www.instagram.com/wlvuni/">                
            <img src="storage/register-file/instagram.png" heigth=30px width=30px alt="Instagram"/>
        </a>
        <a href="https://www.facebook.com/uniwolverhampton/">
            <img src="storage/register-file/facebook.png" heigth=30px width=30px alt="Facebook"/>
        </a>
        <a href="https://twitter.com/wlv_uni">
            <img src="storage/register-file/twitter.png" heigth=30px width=30px alt="Twitter"/>
        </a>
        <a href="https://www.linkedin.com/school/university-of-wolverhampton/">
            <img src="storage/register-file/linkedin.png" heigth=30px width=30px alt="LinkedIn"/>
        </a>
        <a href="https://www.youtube.com/c/WlvAcUkUniversity/videos">
            <img src="storage/register-file/youtube.png"heigth=30px width=30px alt="Youtube"/>
        </a>
    </div>
</div>
</div>
@endsection