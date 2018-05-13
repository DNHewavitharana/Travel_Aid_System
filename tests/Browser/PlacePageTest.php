<?php

namespace Tests\Browser;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HotelSearchTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */


    public function testPlace()
    {
        $this->browse(function ($browser) {
            $user = factory(User::class)->create();
            $browser->loginAs($user)->
            visit('/visiting_place')
                ->assertSee('Find Places:');
        });
    }

}
