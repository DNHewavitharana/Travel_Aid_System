<?php

namespace Tests\Browser;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Tests\Browser\Components\DatePicker;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Carbon\Carbon;
class FlightPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testFlight()
    {
        $this->browse(function ($browser) {
            $user = factory(User::class)->create();
            $browser->loginAs($user)->visit('/plane_schedules')
                ->assertSee('Flight');
        });
    }
}
