@extends('default')
@section('bodyClass', 'login')
@section('content')
<!-- resources/views/auth/login.blade.php -->
<div class="col-md-6 col-md-offset-3 col-sm-12">
<h2 class="loginHeader"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> LOGIN PILOT</h2>
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

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


@stop