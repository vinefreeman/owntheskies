@extends('default')

@section('content')
<div class="row">
    <h1><span class="glyphicon glyphicon-send" aria-hidden="true"></span>  {{ $airport->title }}</h1>
    <h2 class="fade-in one">IATA Code: {{ $airport->code }}</h2>
    <h3>This airport is located in {{ $airport->city }}, it currently has {{ $airport->terminals }} terminal(s), and is a {{ $airport->type }} classification airport.</h3>
</div>

   @if($airport->imglink)
   <div class="row fade-in two">
	    <div class="col-md-6 col-md-offset-3">
		    <img src="{{ $airport->imglink }}" alt="{{  $airport->title }}" class="img-responsive" />
		</div>
	</div>
	@endif

    {!! link_to_route('airports_path', 'View Available Airports', array(), array('class' => 'button fade-in two')) !!}
    <hr class="fade-in two" />
    <a href="/airports/{{ $airport->slug }}/edit" class="btn btn-success fade-in three"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Edit Airport</a><br /><p class="fade-in three system">Airport last updated: {{ $airport->updated_at }}</p>
@stop