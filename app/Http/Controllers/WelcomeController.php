<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Airport;
use App\Airline;

class WelcomeController extends Controller
{

	 public function __construct(Airport $airport, Airline $airline)
    {
        $this->middleware('auth');
        $this->airport = $airport;
        $this->airline = $airline;
        
    }

    public function index(Airport $airport, Airline $airline)
    {
    	$airports = $this->airport->get();
    	$airportcount = count($airports);
    	$airlines = $this->airline->get();
    	$latest = $this->airline->orderBy('updated_at', 'desc')->first();;
    	$airlinecount = count($airlines);
    	return view('welcome')->with(array(
    			'totalairports' => $airportcount,
				'totalairlines' => $airlinecount,
				'airlinename'	=> $latest->name,
				'airlineslug'	=> $latest->slug,
				'logo'			=> $latest->logo_link,
    		));
    }
}
