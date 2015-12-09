@extends('default')

@section('content')
	<div class="edit">
	    <h1><span class="glyphicon glyphicon-plane" aria-hidden="true"></span> Add a new Airport</h1>
	    <!-- illuminate form elements i config/app.php -->

	    {!! Form::open(['route' => 'airports_path']) !!}

	    	@include ('airports.form')

		{!! Form::close() !!}    

	    <br />
	</div>
	<hr class="fade-in two" />
	<a href="/" class="button fade-in two">RETURN TO AIRPORTS</a>
	
@stop