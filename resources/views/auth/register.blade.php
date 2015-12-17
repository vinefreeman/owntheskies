@extends('loginmaster')
@section('bodyClass', 'login')
@section('content')

<!-- resources/views/auth/register.blade.php -->
<div class="col-md-6 col-md-offset-3 col-sm-12">
<h2 class="loginHeader">PILOT REGISTRATION</h2>
<form method="POST" action="/auth/register">
   <!-- {!! csrf_field() !!}-->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <div class="form-group">
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

     <div class="form-group">
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

     <div class="form-group">
        Password
        <input type="password" name="password">
    </div>

     <div class="form-group">
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

     <div class="form-group">
           <button type="submit" class="btn btn-default">Register</button>
    </div>
    <p class="help"><a href='/auth/login'>Return to login</a></p>
</form>
</div>
<video autoplay loop id="video-background" muted>
  <source src="https://skyfiregcs-a.akamaihd.net/exp=1450395748~acl=%2A%2F428326949.mp4%2A~hmac=00a10f40c250bbd807fe0fa1ff1821e924bafa1729de27332d9f2f5a10c3efe1/vimeo-prod-skyfire-std-us/01/3522/5/142613842/428326949.mp4">
</video>

@stop