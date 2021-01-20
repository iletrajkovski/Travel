<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ReviewForPlace;
use App\Place;
use App\User;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(ReviewForPlace::class, function (Faker $faker) {
		$placeId = Place::all()->pluck('id')->toArray();
		$userId = User::all()->pluck('id')->toArray();
    return [
    	'place_id' => $faker->randomElement($placeId),
        'user_id' => $faker->randomElement($userId),
        'body' => $faker->paragraph,
		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
