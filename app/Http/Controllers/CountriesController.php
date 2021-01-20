<?php

namespace App\Http\Controllers;

use App\Country;
use App\City;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::latest()->paginate(10);
        $cities  = City::latest()->get();

        return view('country.index', compact('countries', 'cities'));
    }

    public function show(Country $country)
    {
        $countries = Country::latest()->get();
        return view('country.show', compact('country','countries'));
    }
}
