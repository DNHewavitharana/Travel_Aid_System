<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
class HotelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testHotelView(){
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get('/hotel_booking');

        $response->assertStatus(200);
    }

    public function testHotelSearch(){
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->json('POST', '/hotel_booking/search');

        $response->assertStatus(200);
    }

    public function testHotelReview(){
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->json('POST', '/hotel_booking/review');
        $response->assertStatus(200);
    }

    public function testGetAddHotelForm(){
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/hotel_booking/create');
        $response->assertStatus(200);
    }

    public function testAddHotel(){
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/hotel_booking');
        $response
            ->assertStatus(200);
    }

}
