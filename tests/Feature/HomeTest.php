<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
