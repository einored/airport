<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Country;
use App\Http\Requests\StoreAirlineRequest;
use App\Http\Requests\UpdateAirlineRequest;
use Illuminate\Http\Request;
use Validator;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $airlines = Airline::all();

        return view('airline.index', ['airlines' => $airlines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();

        return view('airline.create', ['countries' => $countries]);
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
            'create_airline_name' => ['required', 'min:2', 'max:50'],
        ],
        [
            'create_airline_name.required' => 'Missing airline name!',
            'create_airline_name.min' => 'Too short airline name!',
            'create_airline_name.max' => 'Too long airline name!',
        ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $airline = new Airline;

        $airline->name = $request->create_airline_name;
        $airline->country_id = $request->create_airline_country_id;
        
        $airline->save();

        return redirect()->route('airlines-index')->with('success', 'Created new airline!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function edit(int $airline_id)
    {
        $countries = Country::all();
        $airline = Airline::where('id', $airline_id)->first();

        return view('airline.edit', ['airline' => $airline, 'countries' => $countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airline $airline)
    {
        $validator = Validator::make($request->all(),
        [
            'airline_name' => ['required', 'min:2', 'max:50'],
        ],
        [
            'airline_name.required' => 'Missing airline name!',
            'airline_name.min' => 'Too short airline name!',
            'airline_name.max' => 'Too long airline name!',
        ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $airline->name = $request->airline_name;
        $airline->country_id = $request->airline_country_id;

        $airline->save();

        return redirect()->route('airlines-index')->with('success', 'Airline updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $airline_id)
    {
        $airline = Airline::where('id', $airline_id)->first();        

        $airline->delete();

        return redirect()->route('airlines-index')->with('delete', 'Airline deleted!');
    }
}
