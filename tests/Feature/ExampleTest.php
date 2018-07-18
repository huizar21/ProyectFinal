<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function testhome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Home');
    }
}
