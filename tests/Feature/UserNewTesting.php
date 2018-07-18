<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserNewTesting extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function New_Test()
    {
        $response = $this->get('/User/new');
        $response->assertStatus(200);
        $response->assertSee('Create new user');
    }

}
