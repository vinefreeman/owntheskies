@extends('default')
@section('content')
	<div class="edit">
	    <h1><span class="glyphicon glyphicon-plane" aria-plane="true"></span> Add a new Aircraft</h1>
	    <!-- illuminate form elements i config/app.php -->

	     {!! Form::open(['route' => 'aircrafts_path']) !!} 

	    	@include ('planes.form')

	    	{!! Form::hidden('created_by', Auth::user()->name) !!}	
		
		{!! Form::close() !!}    

	    <br />
	</div>
	<hr class="fade-in two" />
	<a href="/aircraft" class="button fade-in two">RETURN TO AIRCRAFT</a>
	
@stop