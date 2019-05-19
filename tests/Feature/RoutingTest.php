<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutingTest extends TestCase
{
    /**
     * Root Response
     * 
     * @return void
     */
    public function testRootResponse()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Laravel');
    }

    /**
     * Closure Response
     *
     * @return void
     */
    public function testClosureResponse()
    {
        $response = $this->get('/hello');

        $response->assertStatus(200);
        $response->assertSeeText('test');
    }
}
