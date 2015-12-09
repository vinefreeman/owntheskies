<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Airport;

class Airports extends Controller
{

    public function __construct(Airport $airport)
    {
        $this->airport = $airport;
    }


    /**
    * Show list of airports
    * @param Airport $airport  
    * @return View
    *
    */
    public function index()
    {
       // $airports = Airport::get();
    	$airports = $this->airport->orderBy('title', 'DSC')->get();
        return view('airports.index', compact('airports'));

    }

    /**
    * Show individual airport
    * @param Airport $airport  
    * @return View
    *
    */
    public function show(Airport $airport)
    {	
    	//$airport = $this->airport->whereSlug($slug)->first();
    	return view('airports.show', compact('airport'));
    }
    
    /**
    * edit individual airport
    * @param $slug  
    * @return View
    *
    */
    public function edit(Airport $airport)
    {   
        //$airport = $this->airport->whereSlug($slug)->first();
        return view('airports.edit', compact('airport'));
    }

    /**
    * update individual airport
    * @param $slug  
    * @return 
    *
    */
    public function update(Airport $airport, Request $request)
    {   
        // $airport = $this->airport->whereSlug($slug)->first();

         $airport->fill($request->input())->save();

         return redirect('/');
    }

}
