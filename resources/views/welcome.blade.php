@extends('default')
@section('bodyClass', 'category')
@section('content')
    <h1 class="fade-in one">Welcome back to flightdeck Pilot {{ Auth::user()->name }} - Own the skies!</h1>
<hr />
<div class="noflights">
    <h2>There are no flights leaving at present...  Relax!</h2>
    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
</div>
@stop