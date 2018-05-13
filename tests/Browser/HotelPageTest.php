<?php

namespace Tests\Browser;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Carbon\Carbon;
class HotelPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testHotel()
    {
        $this->browse(function ($browser) {
            $user = factory(User::class)->create();
            $browser->loginAs($user)->
            visit('/hotel_booking')
                    ->assertSee('Hotel');
        });
    }


        public function testHotelSearch()
        {

            $this->browse(function (Browser $browser) {
                $browser->visit('/hotel_booking')
                    ->type('location', 'Colombo')
                    ->type('check_in', Carbon::now())
                    ->type('check_out', Carbon::now()->addDays(5))
                    ->type('no_rooms', 3)
                    ->press('Search')
                    ->assertPathIs('/hotel_booking/search');
            });
        }

}
