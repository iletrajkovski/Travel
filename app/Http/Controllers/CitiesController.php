<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::latest()->paginate(10);
        $countries = Country::latest()->get();

        return view('city.index', compact('cities','countries'));
    }

    public function show(City $city)
    {
        $countries = Country::latest()->get();
        return view('city.show', compact('city','countries'));
    }
}
