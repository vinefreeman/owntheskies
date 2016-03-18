@extends('default')
@section('content')
	<div class="edit row">
		<div class="col-md-6 col-md-offset-1">
			    <h1><span class="glyphicon glyphicon-scissors" aria-plane="true"></span> Edit Aircraft</h1>
			    <!-- illuminate form elements i config/app.php -->

			     {!! Form::model($aircraft, ['route' => ['aircraft_path', $aircraft->slug], 'method' => 'PATCH', 'class' => '']) !!}

			    	@include ('planes.form')

				{!! Form::close() !!}    
		</div>
	</div>
	<hr class="fade-in two" />
	<a href="/aircraft" class="button fade-in two">RETURN TO AIRCRAFT</a>
	
@stop