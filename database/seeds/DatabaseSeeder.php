<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 2)->create();
        factory(App\Country::class, 1)->create(); 
        factory(App\City::class,11)->create(); 
        factory(App\Place::class, 25)->create(); 
        factory(App\ReviewForPlace::class, 100)->create();
    }
}
