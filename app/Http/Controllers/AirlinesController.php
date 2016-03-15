<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateAirlineRequest;
use App\Http\Controllers\Controller;
use DB;
use App\Airline;

class AirlinesController extends Controller
{

     public function __construct(Airline $airline)
    {
        $this->middleware('auth');
        $this->airline = $airline;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Airline $airline)
    {
        //
        $airlines = $this->airline->orderBy('name', 'DSC')->get();
        return view('airlines.index', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buttontext = 'Create';
        return view('airlines.create')->with('buttontext', $buttontext);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAirlineRequest $request, Airline $airline)
    {
        //
        $airline->create($request->all());
        \Session::flash('flash_message', 'Success! Airline created');
        return redirect('airlines/' .  $airline->slug);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airline)
    {
        //
        return view('airlines.show', compact('airline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airline)
    {
        //
        $buttontext = 'Update';
        return view('airlines.edit', compact('airline'))->with('buttontext', $buttontext);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Airline $airline, Request $request)
    {
        //
         $airline->fill($request->input())->save();
         \Session::flash('flash_message', 'Success! Airline updated');
         return redirect('airlines/' .  $airline->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airline $airline)
    {
        //
          $airline->delete();
        \Session::flash('flash_message', 'Success! Airline deleted');
        return redirect('airlines');
    }
}
