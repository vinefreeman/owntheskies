@extends('default')
@section('bodyClass', 'airportsingle')
@section('content')
<div class="row">
   <h1><span class="glyphicon glyphicon-send" aria-hidden="true"></span>  {{ $airport->title }}</h1>
   
</div>
<div class="row">
<div class="col-md-4 col-md-offset-1 fade-in two">
    <div class="airportdetail">
       <span class="glyphicon glyphicon-console" aria-hidden="true"></span>
       <h3 class="fade-in one">IATA Code: <span>{{ $airport->code }}</span></h3>
        <h3>Airport Location: <span>{{ $airport->city }} ({{ $airport->country }})</span></h3><h3>Terminal(s): <span>{{ $airport->terminals }}</span></h3><h3></span>Classification: <span>{{ $airport->type }}</span></h3>
    </div>
    @if($airport->descrip)
        <div class="descrip">
            <span class="glyphicon glyphicon-console" aria-hidden="true"></span>
            <p>{{ $airport->descrip }}</p>
        </div>
      @endif


  </div>
  <div class="col-md-6 fade-in two">
   @if($airport->imglink)
          <img src="{{ $airport->imglink }}" alt="{{  $airport->title }}" class="img-responsive" />
      @endif
    </div>    
  
</div>
<!--Comment -->
 <div class="editairport col-md-offset-1">
     <a href="/airports/{{ $airport->slug }}/edit" class="btn btn-success fade-in three"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Edit Airport</a><br /><p class="fade-in three system">Airport last updated: {{ $airport->updated_at}}</p>
   </div>
    <hr class="fade-in two" />
   {!! link_to_route('airports_path', 'View Available Airports', array(), array('class' => 'button fade-in two')) !!}
@stop