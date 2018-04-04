<?php

use HomeWork2\HealthyCar;
use PHPUnit\Framework\TestCase;

class HealthyCarTest extends TestCase
{
    /** @var HealthyCar */
    private $truck;

    public function setUp()
    {
        $this->truck = new HealthyCar();
    }

    public function test_1_ride()
    {
        $array = [
            20.111,
            5.123,
        ];

        $this->assertEquals(
            1,
            count($this->truck->solveTransportationProblem($array))
        );
    }

    public function test_2_rides()
    {
        $array = [
            16.207,
            10.536,
            5.219,
            2.045,
        ];

        $this->assertEquals(
            2,
            count($this->truck->solveTransportationProblem($array))
        );
    }
}
