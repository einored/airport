<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Airline;
use App\Models\Country;
use App\Http\Requests\StoreAirportRequest;
use App\Http\Requests\UpdateAirportRequest;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airports = Airport::all();

        return view('airport.index', ['airports' => $airports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $airlines = Airline::all();

        return view('airport.create', ['countries' => $countries, 'airlines' => $airlines]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $airport = new Airport;

        $airport->name = $request->create_airport_name;
        $airport->country_id = $request->create_airport_country_id;
        $airport->location = $request->create_airport_location;
        $airport->airline_id = $request->create_airport_airline_id;
        
        $airport->save();

        return redirect()->route('airports-index')->with('success', 'Created new airport!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show(Airport $airport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(int $airport_id)
    {
        $countries = Country::all();
        $airlines = Airline::all();
        $airport = Airport::where('id', $airport_id)->first();

        return view('airport.edit', ['airport' => $airport, 'countries' => $countries, 'airlines' => $airlines]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airport $airport)
    {
        $airport->name = $request->airport_name;
        $airport->country_id = $request->airport_country_id;
        $airport->location = $request->airport_location;
        $airport->airline_id = $request->airport_airline_id;

        $airport->save();

        return redirect()->route('airports-index')->with('success', 'Airport updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $airport_id)
    {
        $airport = Airport::where('id', $airport_id)->first();        

        $airport->delete();

        return redirect()->route('airports-index')->with('delete', 'Airport deleted!');
   
    }
}
