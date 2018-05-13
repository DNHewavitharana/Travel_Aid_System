<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
class VisitingPlaceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPlaceMain()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/visiting_place');
        $response->assertStatus(200);
    }

    public function testLocation()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->json('get', '/visiting_place/get/{place}/{index_id}/{name}');

        $response->assertStatus(200);
    }
}
