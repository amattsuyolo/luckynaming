<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     * @group posts
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/api/post');
   
        $response->assertStatus(200);
    }
}
