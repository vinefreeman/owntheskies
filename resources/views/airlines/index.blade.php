@extends('default')
@section('bodyClass', 'category')
@section('content')
<div class="row header">
	<div class="col-md-12 fade-in two">
         <h1><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Airlines</h1>
         <hr />
       <!-- <h2>The full list of available airlines is below...</h2> 
        <p>Don't forget you can add some more yourself or edit the ones you see here, sweet!</p> -->
    </div>
</div>
<div class="row">
	<!-- SHOW IMAGE LIST-->
	<div class="col-md-10 col-md-offset-1">
    @foreach ($airlines as $airline)

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 fade-in three">
            <div class="airportimglist" style="background-image: url({{ ! empty($airline->photo_link) ? $airline->photo_link : '/images/no-img.jpg' }});"><a href="/airlines/{{ $airline->slug}}"><span>{{ $airline->name }}<br />({{ $airline->code }})</span></a>
            </div>
        </div>

    @endforeach
    </div>
  </div>

        <hr style="clear:both" />
        <a href="/airlines/create" class="btn btn-success fade-in three"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Add New Airline</a>

    
@stop