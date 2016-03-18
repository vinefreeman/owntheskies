@extends('default')
@section('bodyClass', 'aircraftsingle')
@section('content')
<div class="row fade-in one">
   <h1><span class="glyphicon glyphicon-plane" aria-hidden="true"></span>  {{ $aircraft->manufacturer }} {{ $aircraft->name }} </h1>
   
</div>
<div class="row">
<div class="col-md-7 col-md-offset-1 fade-in two">
   <table class="table">
      <tr>
        <th>Manufacturer</th>
        <th>Model</th>
        <th>Type</th>
        <th>ICAO</th>
        <th>Range (miles)</th>
        <th>Speed (mph)</th>
        <th>Ceiling (ft)</th>
      </tr>
      <tr>
        <td>{{ $aircraft->manufacturer }}</td>
        <td>{{ $aircraft->name }}</td>
        <td>{{ $aircraft->type }}</td>
        <td>{{ $aircraft->icao }}</td>
        <td>{{ number_format($aircraft->range) }}</td>
        <td>{{ number_format($aircraft->speed) }}</td>
        <td>{{ number_format($aircraft->ceiling) }}</td>
      </tr>
   </table>
  </div>
  <div class="col-md-3 fade-in two">
   
          <img src="{{ ! empty($aircraft->photolink) ? $aircraft->photolink : '/images/no-img.jpg' }}" alt="{{  $aircraft->name }}" class="img-responsive" />
      
    </div>    
  
</div>
<!--Comment -->
 <div class="editairport col-md-offset-1">
     <a href="/aircraft/{{ $aircraft->slug }}/edit" class="btn btn-success fade-in three"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Edit aircraft</a><br />
     <p class="fade-in three system">aircraft created 
      @if($aircraft->created_by)
        by {{ $aircraft->created_by }} 
      @endif
        on {{ $aircraft->created_at->format('d M Y') }} and was 
        last updated {{ $aircraft->updated_at->diffForHumans() }}
      @if($aircraft->update_by)
        @if($aircraft->update_by == Auth::user()->name)
          by you. 
        @else 
          by {{ $aircraft->update_by }}.
        @endif
      @endif
        </p>
   </div>
    <hr class="fade-in two" />
   {!! link_to_route('aircrafts_path', 'View available aircraft', array(), array('class' => 'button fade-in two')) !!}
@stop