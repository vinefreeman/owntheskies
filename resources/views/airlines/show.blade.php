@extends('default')
@section('bodyClass', 'airportsingle')
@section('content')
<div class="row fade-in one">
   <h1><span class="glyphicon glyphicon-send" aria-hidden="true"></span>  {{ $airline->name }}</h1>
   
</div>
<div class="row">
<div class="col-md-4 col-md-offset-1 fade-in two">
    <div class="airportdetail">
       <span class="glyphicon glyphicon-console" aria-hidden="true"></span>
       <h3 class="fade-in one">IATA Code: <span>{{ $airline->code }}</span></h3>
    </div>
    @if($airline->descrip)
        <div class="descrip">
            <span class="glyphicon glyphicon-console" aria-hidden="true"></span>
            <p>{{ $airline->descrip }}</p>
        </div>
      @endif
      <img src="{{ ! empty($airline->logo_link) ? $airline->logo_link : '/images/no-img.jpg' }}" alt="{{  $airline->name }}" class="img-responsive logo" />

  </div>
  <div class="col-md-6 fade-in two">
   
          <img src="{{ ! empty($airline->photo_link) ? $airline->photo_link : '/images/no-img.jpg' }}" alt="{{  $airline->name }}" class="img-responsive" />
      
    </div>    
  
</div>
<!--Comment -->
 <div class="editairport col-md-offset-1">
     <a href="/airlines/{{ $airline->slug }}/edit" class="btn btn-success fade-in three"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Edit airline</a><br />
     <p class="fade-in three system">Airline created 
      @if($airline->created_by)
        by {{ $airline->created_by }} 
      @endif
        on {{ $airline->created_at->format('d M Y') }} and was 
        last updated {{ $airline->updated_at->diffForHumans() }}
      @if($airline->update_by)
        @if($airline->update_by == Auth::user()->name)
          by you. 
        @else 
          by {{ $airline->update_by }}.
        @endif
      @endif
        </p>
   </div>
    <hr class="fade-in two" />
   {!! link_to_route('airlines_path', 'View available airlines', array(), array('class' => 'button fade-in two')) !!}
@stop