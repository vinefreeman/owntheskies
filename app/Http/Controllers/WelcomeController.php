<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Airport;
use App\Airline;
use App\Aircraft;

class WelcomeController extends Controller
{

	 public function __construct(Airport $airport, Airline $airline, Aircraft $aircraft)
    {
        $this->middleware('auth');
        $this->airport = $airport;
        $this->airline = $airline;
        $this->aircraft = $aircraft;
        
    }

    public function index(Airport $airport, Airline $airline, Aircraft $aircraft)
    {
    	$airports = $this->airport->get();
    	$airportcount = count($airports);
    	$airlines = $this->airline->get();
    	$latest = $this->airline->orderBy('updated_at', 'desc')->first();;
    	$airlinecount = count($airlines);
        $aircraft = $this->aircraft->get();
        $aircraftcount = count($aircraft);
    	return view('welcome')->with(array(
    			'totalairports' => $airportcount,
				'totalairlines' => $airlinecount,
				'airlinename'	=> $latest->name,
                'totalaircraft' => $aircraftcount,
				'airlineslug'	=> $latest->slug,
				'logo'			=> $latest->logo_link,
                
    		));
    }
}
