<?php

use HomeWork2\GetMaximum;
use PHPUnit\Framework\TestCase;

class GetMaximumTest extends TestCase
{
    /** @var GetMaximum */
    private $max;

    public function setUp()
    {
        $this->max = new GetMaximum();
    }

    public function test_1_ride()
    {
        $array = [1, 2, 100, 101, -1000, 10, 1];

        $this->assertEquals(
            'Max sum from 0 to 3 is 204',
            $this->max->getRange($array)
        );
    }

    public function test_2_rides()
    {
        $array = [-5, -2, -15];

        $this->assertEquals(
            'Max sum from 1 to 1 is -2',
            $this->max->getRange($array)
        );
    }
}
