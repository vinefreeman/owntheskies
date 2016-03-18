@extends('default')
@section('bodyClass', 'planes')
@section('content')
<div class="row header">
	<div class="col-md-12 fade-in two">
	    <h1><span class="glyphicon glyphicon-plane" aria-hidden="true"></span> Aircraft</h1>
	    <hr />
	 </div>
 </div>
 <div class="row">
	<!-- SHOW IMAGE LIST-->
	<div class="col-md-10 col-md-offset-1">
    @foreach ($aircraftlist as $aircraft)

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 fade-in three">
            <div class="airportimglist" style="background-image: url({{ ! empty($aircraft->photolink) ? $aircraft->photolink : '/images/no-img.jpg' }});">
            	<a href="/aircraft/{{ $aircraft->slug}}">
            		<span>{{ $aircraft->manufacturer }} {{ $aircraft->name }}</span>
            	</a>
            </div>
        </div>

    @endforeach
    </div>
  </div>
 <div class="row">
 	<div class="col-md-12">   
	      <hr style="clear:both" />
<a href="/aircraft/create" class="btn btn-success fade-in three"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Add New Aircraft</a>
    </div>
   </div>
@stop