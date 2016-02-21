@extends('default')
@section('bodyClass', 'category')
@section('content')
<div class="row header">
	<div class="col-md-12">
    <h1 class="fade-in two"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Airports</h1>
    <hr />

    <h2>Your full list of available airports is below!</h2> 
    <p>Don't forget you can add some more yourself or edit the ones you see here, sweet!</p>
       </div>
  </div>
<div class="row">
	<!-- SHOW IMAGE LIST-->
	<div class="col-md-10 col-md-offset-1">
    @foreach ($airports as $airport)

    	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 fade-in three airportimglist" style="background-image: url({{ ! empty($airport->imglink) ? $airport->imglink : '/images/no-img.jpg' }}); background-size: 90% auto"><a href="/airports/{{ $airport->slug}}"><span>{{ $airport->title }}<br />({{ $airport->code }})</span></a>

    	</div>
    @endforeach
    </div>
  </div>
<hr style="clear:both" />
<a href="/airports/create" class="btn btn-success fade-in three"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Add New Airport</a>
<hr />
 <h2 class="fade-in two"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Airport List</h2>
    <!-- SHOW BASIC LIST-->
    @foreach ($airports as $airport)
    	<li class="fade-in three"><h2><a href="/airports/{{ $airport->slug}}">{{ $airport->title }} ({{ $airport->code }})</a></h2></li>
    @endforeach
    <hr />

    
 

@stop