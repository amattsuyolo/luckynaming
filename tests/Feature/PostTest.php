<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * @group posts
     * @return void
     */
    public function testPost()
    {
        $response = $this->get('/api/post');
        $response->assertStatus(200);
    }
}
