<?php

namespace App\Http\Controllers;

use App\Filters\CountryFilter;
use App\Http\Requests\DeleteCountryRequest;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return new CountryCollection(Country::paginate());
        $filter = new CountryFilter();
        $queryItems = $filter->transform($request);
        // $groups = $request->query('IncludeGroups');
        $countries = Country::where($queryItems);
        // if($groups) {
        //     $countries = $countries->with('groups');
        // }
        return new CountryCollection($countries->paginate()->appends($request->query()));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
        return new CountryResource(Country::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country,Request $request)
    {
        return new CountryResource($country);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        return $country->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country,DeleteCountryRequest $request)
    {
        return $country->delete($request->all());
    }
}
