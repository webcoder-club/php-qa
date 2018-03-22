<?php

namespace Tests\Day1;

use Day1\PrimeFactorsExample\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /** @var PrimeFactors */
    private $prime;

    public function setUp()
    {
        $this->prime = new PrimeFactors();
    }

    public function test_it_calculates_for_1()
    {
        $this->assertEquals([], $this->prime->generate(1));
    }

    public function test_it_calculates_for_2()
    {
        $this->assertEquals([2], $this->prime->generate(2));
    }

    public function test_it_calculates_for_3()
    {
        $this->assertEquals([3], $this->prime->generate(3));
    }

    public function test_it_calculates_for_4()
    {
        $this->assertEquals([2, 2], $this->prime->generate(4));
    }

    public function test_it_calculates_for_5()
    {
        $this->assertEquals([5], $this->prime->generate(5));
    }

    public function test_it_calculates_for_6()
    {
        $this->assertEquals([2, 3], $this->prime->generate(6));
    }

    public function test_it_calculates_for_8()
    {
        $this->assertEquals([2, 2, 2], $this->prime->generate(8));
    }

    public function test_it_calculates_for_9()
    {
        $this->assertEquals([3, 3], $this->prime->generate(9));
    }

    public function test_it_calculates_for_100()
    {
        $this->assertEquals([2, 2, 5, 5], $this->prime->generate(100));
    }
}
