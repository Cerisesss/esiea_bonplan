<?php

namespace App\Tests\Services;

use PHPUnit\Framework\TestCase;

class MathComputeServiceTest extends TestCase
{
    public function testIsPremier() : void
    {
        $mathService = new MathComputeService();
        $this->assertEquals(true, $mathService->isPremier(2));
        $this->assertEquals(true, $mathService->isPremier(7));
        $this->assertEquals(true, $mathService->isPremier(19));
        $this->assertEquals(false, $mathService->isPremier(4));
        $this->assertEquals(false, $mathService->isPremier(16));
    }
}