@extends('default')
@section('bodyClass', 'category')
@section('content')
    <h1 class="fade-in one">Welcome back to flightdeck Pilot {{ Auth::user()->name }} - Own the skies!</h1>
<hr />
<div class="row">
	<div class="noflights col-md-12">
	    <h2>There are no flights leaving at present...  Relax!</h2>
	    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="col-md-4 total">
			<h2>Current Airports</h2><span>{{ $totalairports }}</span>
			<a href="airports" class="btn btn-default">View</a>
			</div>
		<div class="col-md-4 total">
			<h2>Current Airlines</h2>
			<span>{{ $totalairlines }}</span>
			<a href="airlines" class="btn btn-default">View</a>
		</div>
		<div class="col-md-4 total">
			<h2>Latest Airline</h2>
			<img src="{{ $logo }}" class="img-responsive" />
			
			<a href="airlines/{!! $airlineslug  !!}" class="btn btn-default">View</a>
		</div>
	</div>
</div>
@stop