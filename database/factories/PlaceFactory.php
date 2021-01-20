<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Place;
use App\City;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Place::class, function (Faker $faker) {
	$cityId = City::all()->pluck('id')->toArray();
    return [
    	'city_id' => $faker->randomElement($cityId),
        'name' => $faker->streetName,
        'description' => $faker->paragraph,
        'picture' => 'venice.jpg',	
		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
