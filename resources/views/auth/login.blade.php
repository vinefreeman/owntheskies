@extends('loginmaster')
@section('bodyClass', 'login')
@section('content')
<!-- resources/views/auth/login.blade.php -->
<br />
<div class="col-md-6 col-md-offset-3 col-sm-12">
<h2 class="loginHeader"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> LOGIN PILOT</h2>
    <form method="POST" action="/auth/login">
       <!-- {!! csrf_field() !!}-->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <!-- <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>
          -->
         <div class="form-group">
            <button type="submit" class="btn btn-default">Login</button>
        </div>

    </form>
    <p>&nbsp;</p>
    <div class="right">
        <p class="help right">*New here?   <a href='/auth/register' class="btn btn-success submit">Register first</a></p>
    </div>
</div>
<video autoplay loop id="video-background" muted>
  <source src="https://skyfiregcs-a.akamaihd.net/exp=1450395748~acl=%2A%2F428326949.mp4%2A~hmac=00a10f40c250bbd807fe0fa1ff1821e924bafa1729de27332d9f2f5a10c3efe1/vimeo-prod-skyfire-std-us/01/3522/5/142613842/428326949.mp4">
</video>

@stop