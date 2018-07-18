<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function User()
    {
        $response = $this->get('/User');
        $response->assertStatus(200);
        $response->assertSee('They are users');
    }
}
