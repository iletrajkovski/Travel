<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Country;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $countries = Country::latest()->get();

        $this->browse(function (Browser $browser) use ($countries) {
            $browser->visit('/country')->
            assertSeeIn('/body/main/div/div/div[2]/div[2]/div/div/div[1]/h1/a', $countries[0]->name);
        });
    }
}
