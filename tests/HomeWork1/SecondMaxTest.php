<?php

namespace Tests\Day1;

use HomeWork1\Gaus;
use HomeWork1\SecondMax;
use PHPUnit\Framework\TestCase;

class SecondMaxTest extends TestCase
{
    public function test_it_count_1()
    {
        $secondMax = new SecondMax();
        $this->assertEquals(4, $secondMax->calculator([3, 4, 5, 5]));
    }
}
