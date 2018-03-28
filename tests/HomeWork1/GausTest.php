<?php

namespace Tests\Day1;

use HomeWork1\Gaus;
use PHPUnit\Framework\TestCase;

class GausTest extends TestCase
{
    public function test_it_count_1()
    {
        $gaus = new Gaus();
        $this->assertEquals(1, $gaus->calculator(1));
    }

    public function test_it_count_10()
    {
        $gaus = new Gaus();
        $this->assertEquals(55, $gaus->calculator(10));
    }

    public function test_it_count_100()
    {
        $gaus = new Gaus();
        $this->assertEquals(5050, $gaus->calculator(100));
    }
}
