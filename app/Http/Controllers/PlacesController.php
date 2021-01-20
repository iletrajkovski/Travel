<?php

namespace App\Http\Controllers;

use App\Place;
use App\Country;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index()
    {
        $places = Place::latest()->paginate(15);
        $countries = Country::latest()->get();

        return view('place.index', compact('places','countries'));
    }

    public function show(Place $place)
    {
        $countries = Country::latest()->get();
        return view('place.show', compact('place','countries'));
    }
}
