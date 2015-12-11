@extends('default')
@section('bodyClass', 'category')
@section('content')
	<h2 class="fade-in one">Welcome to flightdeck pilot {{ Auth::user()->name }}, have a look at the available airports below.</h2>
	<hr />
    <h1 class="fade-in two"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Airports</h1>
    @foreach ($airports as $airport)
    	<li class="fade-in three"><h2><a href="/airports/{{ $airport->slug}}">{{ $airport->title }} ({{ $airport->code }})</a></h2></li>
    @endforeach
    <hr />
    <a href="/airports/create" class="btn btn-success fade-in three"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Add New Airport</a>
@stop