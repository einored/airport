<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Airline;
use App\Models\Country;
use App\Http\Requests\StoreAirportRequest;
use App\Http\Requests\UpdateAirportRequest;
use Illuminate\Http\Request;
use Validator;

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
        $validator = Validator::make($request->all(),
        [
            'create_airport_name' => ['required', 'min:2', 'max:50'],
            'create_airport_longitude' => ['required', 'max:30'],
            'create_airport_latitude' => ['required', 'max:30'],
        ],
        [
            'create_airport_name.required' => 'Missing airport name!',
            'create_airport_name.min' => 'Too short airport name!',
            'create_airport_name.max' => 'Too long airport name!',

            'create_airport_longitude.required' => 'Missing airport longitude!',
            'create_airport_longitude.max' => 'Too long airport longitude!',

            'create_airport_latitude.required' => 'Missing airport latitude!',
            'create_airport_latitude.max' => 'Too long airport latitude!',
        ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $airport = new Airport;

        $airport->name = $request->create_airport_name;
        $airport->country_id = $request->create_airport_country_id;
        $airport->longitude = $request->create_airport_longitude;
        $airport->latitude = $request->create_airport_latitude;
        $airport->airline_id = $request->create_airport_airline_id;
        
        $airport->save();

        return redirect()->route('airports-index')->with('success', 'Created new airport!');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(int $airport_id)
    {
        $airport = Airport::where('id', $airport_id)->first();

        return view('airport.show', ['airport' => $airport]);
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
        $validator = Validator::make($request->all(),
        [
            'airport_name' => ['required', 'min:2', 'max:50'],
            'airport_longitude' => ['required', 'max:30'],
            'airport_latitude' => ['required', 'max:30'],
        ],
        [
            'airport_name.required' => 'Missing airport name!',
            'airport_name.min' => 'Too short airport name!',
            'airport_name.max' => 'Too long airport name!',

            'airport_longitude.required' => 'Missing airport longitude!',
            'airport_longitude.max' => 'Too long airport longitude!',

            'airport_latitude.required' => 'Missing airport latitude!',
            'airport_latitude.max' => 'Too long airport latitude!',
        ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $airport->name = $request->airport_name;
        $airport->country_id = $request->airport_country_id;
        $airport->longitude = $request->airport_longitude;
        $airport->latitude = $request->airport_latitude;
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
