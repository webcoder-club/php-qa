<?php

namespace Tests\Day2;

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

    /**
     * @dataProvider additionProvider
     * @param $expected
     * @param $num
     */
    public function test_it_calculates_correct($expected, $num)
    {
        $this->assertEquals($expected, $this->converter->convert($num));
    }

    public function additionProvider()
    {
        return [
            'calculates 1' => ['I', 1],
            'calculates 2' => ['II', 2],
            'calculates 4' => ['IV', 4],
            'calculates 5' => ['V', 5],
            'calculates 6' => ['VI', 6],
            'calculates 9' => ['IX', 9],
            'calculates 10' => ['X', 10],
            'calculates 11' => ['XI', 11],
            'calculates 20' => ['XX', 20],
            'calculates 50' => ['L', 50],
            'calculates 100' => ['C', 100],
            'calculates 500' => ['D', 500],
            'calculates 1000' => ['M', 1000],
            'calculates 1999' => ['MCMXCIX', 1999],
            'calculates 4999' => ['MMMMCMXC', 4990],
            'calculates 2018' => ['MMXVIII', 2018],
        ];
    }

    /**
     * @depends test_it_calculates_correct
     * @expectedException \InvalidArgumentException
     */
    public function test_it_not_calculates_for_0()
    {
        $this->converter->convert(0);
    }

    /**
     * @depends test_it_calculates_correct
     * @expectedException \InvalidArgumentException
     */
    public function test_it_not_calculates_for_minus_1()
    {
        $this->converter->convert(-1);
    }

    public function testOutput()
    {
        $this->expectOutputString('MMXVIII');
        print $this->converter->convert(2018);
    }
}
