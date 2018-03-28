<?php

namespace Tests\Day1;

use HomeWork1\CountIt;
use PHPUnit\Framework\TestCase;

class CountItTest extends TestCase
{
    public function test_it_count_442158755745()
    {
        $counter = new CountIt();
        $this->assertEquals(4, $counter->solution(5, 442158755745));
    }
}
