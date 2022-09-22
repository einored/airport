<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use Illuminate\Http\Request;
use Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countries = Country::all();

        return view('country.index', ['countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'create_country_iso' => ['required', 'min:2', 'max:10'],
            'create_country_name' => ['required', 'min:2', 'max:50'],
        ],
        [
            'create_country_iso.required' => 'Missing country ISO!',
            'create_country_iso.min' => 'Too short ISO!',
            'create_country_iso.max' => 'Too long ISO!',

            'create_country_name.required' => 'Missing country name!',
            'create_country_name.min' => 'Too short country name!',
            'create_country_name.max' => 'Too long country name!',
        ]
        );

       if ($validator->fails()) {
           $request->flash();
           return redirect()->back()->with('error', $validator->errors()->first());
       }

        $country = new Country;

        $country->iso = $request->create_country_iso;
        $country->name = $request->create_country_name;

        $country->save();

        return redirect()->route('countries-index')->with('success', 'Created new country!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(int $country_id)
    {
        $country = Country::where('id', $country_id)->first();

        return view('country.edit', ['country' => $country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $validator = Validator::make($request->all(),
        [
            'country_iso' => ['required', 'min:2', 'max:10'],
            'country_name' => ['required', 'min:2', 'max:50'],
        ],
        [
            'country_iso.required' => 'Missing country ISO!',
            'country_iso.min' => 'Too short ISO!',
            'country_iso.max' => 'Too long ISO!',

            'country_name.required' => 'Missing country name!',
            'country_name.min' => 'Too short country name!',
            'country_name.max' => 'Too long country name!',
        ]
        );

       if ($validator->fails()) {
           $request->flash();
           return redirect()->back()->with('error', $validator->errors()->first());
       }

        $country->iso = $request->country_iso;
        $country->name = $request->country_name;

        $country->save();

        return redirect()->route('countries-index')->with('success', 'Country updated!');
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $country_id)
    {
        $country = Country::where('id', $country_id)->first();

        $country->delete();

        return redirect()->route('countries-index')->with('delete', 'Country deleted!');
    }
}
