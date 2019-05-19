<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalculatePointServiceTest extends TestCase
{
    /**
     * request 0
     *
     * @return void
     */
    public function testRequestZero()
    {
        $response = $this->get('/calculate/point?amount=0');

        $response->assertStatus(200);
        $response->assertJson(['result' => 0]);
    }

    /**
     * request 500
     *
     * @return void
     */
    public function testRequestUnder1000()
    {
        $response = $this->get('/calculate/point?amount=500');

        $response->assertStatus(200);
        $response->assertJson(['result' => 0]);
    }

    /**
     * request over 1000
     *
     * @return void
     */
    public function testRequestOver1000()
    {
        $response = $this->get('/calculate/point?amount=1500');

        $response->assertStatus(200);
        $response->assertJson(['result' => 15]);
    }

    /**
     * request over 10000
     *
     * @return void
     */
    public function testRequestOver10000()
    {
        $response = $this->get('/calculate/point?amount=10000');

        $response->assertStatus(200);
        $response->assertJson(['result' => 200]);
    }

}
