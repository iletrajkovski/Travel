<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Country;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
	$countryId = Country::all()->pluck('id')->toArray();
    return [
        'country_id' => $faker->randomElement($countryId),
		'name' => $faker->city,
		'description' => $faker->paragraph,
		'picture' => 'rome.jpg',	
		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
