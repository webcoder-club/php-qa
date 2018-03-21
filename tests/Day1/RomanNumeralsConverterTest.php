<?php

namespace Tests\Day1;

use Day1\RomanExample\RomanNumeralsConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralsConverterTest extends TestCase
{
    /** @var RomanNumeralsConverter */
    private $converter;

    public function setUp()
    {
        $this->converter = new RomanNumeralsConverter();
    }

    public function test_it_calculates_for_1()
    {
        $this->assertEquals('I', $this->converter->convert(1));
    }

    public function test_it_calculates_for_2()
    {
        $this->assertEquals('II', $this->converter->convert(2));
    }

    public function test_it_calculates_for_4()
    {
        $this->assertEquals('IV', $this->converter->convert(4));
    }

    public function test_it_calculates_for_5()
    {
        $this->assertEquals('V', $this->converter->convert(5));
    }

    public function test_it_calculates_for_6()
    {
        $this->assertEquals('VI', $this->converter->convert(6));
    }

    public function test_it_calculates_for_9()
    {
        $this->assertEquals('IX', $this->converter->convert(9));
    }

    public function test_it_calculates_for_10()
    {
        $this->assertEquals('X', $this->converter->convert(10));
    }

    public function test_it_calculates_for_11()
    {
        $this->assertEquals('XI', $this->converter->convert(11));
    }

    public function test_it_calculates_for_20()
    {
        $this->assertEquals('XX', $this->converter->convert(20));
    }

    public function test_it_calculates_for_50()
    {
        $this->assertEquals('L', $this->converter->convert(50));
    }

    public function test_it_calculates_for_100()
    {
        $this->assertEquals('C', $this->converter->convert(100));
    }

    public function test_it_calculates_for_500()
    {
        $this->assertEquals('D', $this->converter->convert(500));
    }

    public function test_it_calculates_for_1000()
    {
        $this->assertEquals('M', $this->converter->convert(1000));
    }

    public function test_it_calculates_for_1999()
    {
        $this->assertEquals('MCMXCIX', $this->converter->convert(1999));
    }

    public function test_it_calculates_for_4990()
    {
        $this->assertEquals('MMMMCMXC', $this->converter->convert(4990));
    }

    public function test_it_calculates_for_2018()
    {
        $this->assertEquals('MMXVIII', $this->converter->convert(2018));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_it_not_calculates_for_0()
    {
        $this->converter->convert(0);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_it_not_calculates_for_minus_1()
    {
        $this->converter->convert(-1);
    }
}
