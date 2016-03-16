@extends('default')
@section('bodyClass', 'airportsingle')
@section('content')
<div class="row fade-in one">
   <h1><span class="glyphicon glyphicon-send" aria-hidden="true"></span>  {{ $airport->title }}</h1>
   
</div>
<div class="row">
<div class="col-md-4 col-md-offset-1 fade-in two">
    <div class="airportdetail">
       <span class="glyphicon glyphicon-console" aria-hidden="true"></span>
       <h3 class="fade-in one">IATA Code: <span>{{ $airport->code }}</span></h3>
        <h3>Airport Location: <span>{{ $airport->city }} ({{ $airport->country }})</span></h3>
        <h3>Terminal(s): <span>{{ $airport->terminals }}</span></h3>
        <h3></span>Runway(s): <span>{{ $airport->runways }}</span></h3>
        <h3></span>Classification: <span>{{ $airport->type }}</span></h3>
    </div>
    @if($airport->descrip)
        <div class="descrip">
            <span class="glyphicon glyphicon-console" aria-hidden="true"></span>
            <p>{{ $airport->descrip }}</p>
        </div>
      @endif


  </div>
  <div class="col-md-6 fade-in two">
   
          <img src="{{ ! empty($airport->imglink) ? $airport->imglink : '/images/no-img.jpg' }}" alt="{{  $airport->title }}" class="img-responsive" />
      
    </div>    
  
</div>
<!--Comment -->
 <div class="editairport col-md-offset-1">
     <a href="/airports/{{ $airport->slug }}/edit" class="btn btn-success fade-in three"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Edit Airport</a><br />
     <p class="fade-in three system">Airport created 
      @if($airport->created_by)
        by {{ $airport->created_by }} 
      @endif
        on {{ $airport->created_at->format('d M Y') }} and was 
        last updated {{ $airport->updated_at->diffForHumans() }}
      @if($airport->update_by)
        @if($airport->update_by == Auth::user()->name)
          by you. 
        @else 
          by {{ $airport->update_by }}.
        @endif
      @endif
        </p>
   </div>
    <hr class="fade-in two" />
   {!! link_to_route('airports_path', 'View Available Airports', array(), array('class' => 'button fade-in two')) !!}
@stop