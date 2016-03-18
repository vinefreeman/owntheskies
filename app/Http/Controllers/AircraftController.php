<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateAircraftRequest;
use App\Http\Controllers\Controller;
use DB;
use App\Aircraft;

class AircraftController extends Controller
{
     public function __construct(Aircraft $aircraft)
    {
        $this->middleware('auth');
        $this->aircraft = $aircraft;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Aircraft $aircraft)
    {
        //
        $aircraftlist = $this->aircraft->orderBy('name', 'DSC')->get();
        return view('planes.index', compact('aircraftlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Aircraft $aircraft)
    {
        //
        $buttontext = 'Create';
         return view('planes.create')->with('buttontext', $buttontext);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAircraftRequest $request, Aircraft $aircraft)
    {   
       $aircraft->create($request->all());
         
          \Session::flash('flash_message', 'Success! Aircraft created');
         return redirect('aircraft/' .  $aircraft->slug);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Aircraft
     * @return \Illuminate\Http\Response
     */
     public function show(Aircraft $aircraft)
    {   
    
        return view('planes.show', compact('aircraft'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $aircraft
     * @return \Illuminate\Http\Response
     */
   public function edit(Aircraft $aircraft)
    {
        //
        $buttontext = 'Update';
        return view('planes.edit', compact('aircraft'))->with('buttontext', $buttontext);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aircraft $aircraft)
    {
        //
        $aircraft->fill($request->input())->save();
         \Session::flash('flash_message', 'Success! aircraft updated');
         return redirect('aircraft/' .  $aircraft->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
