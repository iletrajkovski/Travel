<?php

namespace App\Http\Controllers;

use App\Place;
use App\ReviewsForPlaces;
use Illuminate\Http\Request;

class ReviewsForPlacesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Place $place)
    {
        $place->addReview([
            'body' => request('body'),
            'user_id' => auth()->id()
            ]);

        return back();
    }
}
