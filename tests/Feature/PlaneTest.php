<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
class PlaneTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testPlaneSchedule(){
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get('/plane_schedules');

        $response->assertStatus(200);

    }

    public function testPlaneSearch(){
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->json('POST', '/plane_schedules/search');

        $response
            ->assertStatus(200);
    }
    public function testPlaneReview(){
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->json('POST', '/plane_schedules/review');

        $response
            ->assertStatus(200);
    }
}
