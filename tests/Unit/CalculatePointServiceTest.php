<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use CalculatePointService;

class CalculatePointServiceTest extends TestCase
{
    /**
     * 0 → 0
     *
     * @return void
     */
    public function testRequestZero()
    {
        $this->assertSame(0, CalculatePointService::calcPoint(0));
    }

    /**
     * 1000 → 10
     *
     * @return void
     */
    public function testRequest1000()
    {
        $this->assertSame(10, CalculatePointService::calcPoint(1000));
    }


    /**
     * 10000 → 200
     *
     * @return void
     */
    public function testRequest10000()
    {
        $this->assertSame(200, CalculatePointService::calcPoint(10000));
    }
}
