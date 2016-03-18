@extends('default')
@section('bodyClass', 'userprofile')
@section('content')
<div class="row header">
	<div class="col-md-12 fade-in two">
	    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Pilot Profile</h1>
	    <hr />
	 </div>
 </div>
 <div class="row">
 	<div class="col-md-5 pilot col-md-offset-2">   
	      <h2>Pilot:  {{ Auth::user()->name }}</h2><br />
	      <h3>Email:  {{ Auth::user()->email }}</h3>
	      <h3>Current Level:</h3>

	      <p>Pilot since: {{Auth::user()->created_at->format('d M Y')  }}</p>
    </div>
    <div class="col-md-3 profile">   
	        <img src="{{ ! empty(Auth::user()->profile_photo) ? Auth::user()->profile_photo : '/images/no-profile.jpg' }}" alt="{{  Auth::user()->name }}" class="img-responsive img-circle" />


    </div>
  </div>
@stop