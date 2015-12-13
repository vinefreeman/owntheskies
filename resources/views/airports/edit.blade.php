@extends('default')

@section('content')
	<div class="edit">
	    <h1><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span> EDITING: {{ $airport->title }}</h1>
	    <h2 class=""></h2>
	    <!-- illuminate form elements i config/app.php -->

	    {!! Form::model($airport, ['route' => ['airport_path', $airport->slug], 'method' => 'PATCH', 'class' => '']) !!}

	    	@include ('airports.form')


		{!! Form::close() !!}    

		{!! Form::open(['method' => 'DELETE', 'route' => ['airport_path', $airport->slug]]) !!}

			<div class="form-group">	
				{!! Form::submit('Delete Airport', ['class' => 'btn btn-danger fade-in three']) !!}	
			</div>

		{!! Form::close() !!}    

	    <br />
	</div>
	<hr class="fade-in two" />
	<a href="/" class="button fade-in two">RETURN TO AIRPORTS</a>
	
@stop