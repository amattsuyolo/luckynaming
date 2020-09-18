<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostDetailTest extends TestCase
{
    /**
     * A basic feature test example.
     * @group postdetail
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/post/1');

        $response->assertStatus(200);
    }
}
