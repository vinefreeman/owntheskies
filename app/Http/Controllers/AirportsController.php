<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateAirportRequest;
use App\Http\Controllers\Controller;
use DB;
use App\Airport;

class AirportsController extends Controller
{

    public function __construct(Airport $airport)
    {
        $this->middleware('auth');
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
    * Show airport images
    * @param Airport $airport  
    * @return View
    *
    */
    public function showimg(Airport $airport)
    {   
        //$airport = $this->airport->whereSlug($slug)->first();
        return view('airports.showimg', compact('airport'));
    }


    /**
    * Show form to create individual airport
    * @param Airport $airport  
    * @return View
    *
    */
    public function create(Airport $airport)
    {   
        //$airport = $this->airport->whereSlug($slug)->first();
        return view('airports.create');
    }
    
     public function store(CreateAirportRequest $request, Airport $airport)
    {   
       $airport->create($request->all());
       return redirect()->route('airports_path');
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

    public function destroy(Airport $airport)
    {
        
        $airport->delete();

        return redirect('airports');
    }

}
