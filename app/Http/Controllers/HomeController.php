<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\City;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $countries = Country::latest()->get();

        $cities  = City::latest()->get();

        return view('home', compact('countries','cities'));
    }
}
