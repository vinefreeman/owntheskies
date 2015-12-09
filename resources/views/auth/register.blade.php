@extends('default')
@section('bodyClass', 'login')
@section('content')

<!-- resources/views/auth/register.blade.php -->
<div class="col-md-6 col-md-offset-3 col-sm-12">
<h2 class="loginHeader">PILOT REGISTRATION</h2>
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

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

@stop