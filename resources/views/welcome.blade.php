@extends('default')
@section('bodyClass', 'category')
@section('content')

<div class="row fade-in three">
	<div class="col-md-9 col-md-offset-1">
	 <h1>Welcome back pilot {{ Auth::user()->name }} - Own the skies!</h1>
		<div class="col-md-3 total">
			<h2>Airports</h2><span>{{ $totalairports }}</span>
			<a href="airports" class="btn btn-default">View</a>
			</div>
		<div class="col-md-3 total">
			<h2>Airlines</h2>
			<span>{{ $totalairlines }}</span>
			<a href="airlines" class="btn btn-default">View</a>
		</div>
		<div class="col-md-3 total">
			<h2>Aircraft</h2>
			<span>{{ $totalaircraft }}</span>
			<a href="aircraft" class="btn btn-default">View</a>
		</div>
		<div class="col-md-3 total">
			<h2>Latest Airline</h2>
			<img src="{{ $logo }}" class="img-responsive" />
			
			<a href="airlines/{!! $airlineslug  !!}" class="btn btn-default">View</a>
		</div>
	</div>
</div>

<div class="row fade-in three">
	<div class="noflights col-md-12">
	<h2>Flight Schedule...</h2>
	    <h3>There are no flights leaving at present...  Relax!</h3>
	    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
	</div>
</div>
@stop