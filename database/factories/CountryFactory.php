<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Country::class, function (Faker $faker) {
    return [
    	'name' => $faker->country,
		'description' => $faker->paragraph,
		'picture' => 'tuscany.jpg',		
		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		];
});
