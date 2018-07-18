<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NicknameTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testwithnickname()
    {
        $response = $this->get('/Regard/Jacinto');
        $response->assertStatus(200);
        $response->assertSee('Welcome Jacinto, you dont have nickname');
    }
    public function testanynickname()
    {
        $response = $this->get('/Regard/Pedro/Mr kill');
        $response->assertStatus(200);
        $response->assertSee('Welcome Pedro, your nickname is Mr kill');
    }
}
