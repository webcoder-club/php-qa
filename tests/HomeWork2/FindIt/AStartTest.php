<?php

namespace Tests\Day1;

use HomeWork2\FindIt\Algorithm\AStar;
use PHPUnit\Framework\TestCase;

class AStartTest extends TestCase
{
    public function testCalcDirectRoute()
    {
        $result = AStar::calc('A', 'B', [
            ['from' => 'A', 'to' => 'B', 'cost' => 11]
        ]);
        $this->assertEquals(['path' => ['A', 'B'], 'cost' => 11], $result);
    }

    public function testCalcRouteWithTransition()
    {
        $result = AStar::calc('A', 'C', [
            ['from' => 'A', 'to' => 'B', 'cost' => 5],
            ['from' => 'B', 'to' => 'C', 'cost' => 6],
            ['from' => 'A', 'to' => 'C', 'cost' => 100]
        ]);
        $this->assertEquals(['path' => ['A', 'B', 'C'], 'cost' => 11], $result);
    }

    public function testCalcVeryComplexRoute()
    {
        $result = AStar::calc('A', 'E', [
            ['from' => 'A', 'to' => 'B', 'cost' => 11],
            ['from' => 'B', 'to' => 'A', 'cost' => 12],
            ['from' => 'A', 'to' => 'C', 'cost' => 30],
            ['from' => 'C', 'to' => 'A', 'cost' => 30],
            ['from' => 'A', 'to' => 'D', 'cost' => 17],
            ['from' => 'D', 'to' => 'A', 'cost' => 20],
            ['from' => 'A', 'to' => 'E', 'cost' => 90],
            ['from' => 'E', 'to' => 'A', 'cost' => 91],
            ['from' => 'B', 'to' => 'C', 'cost' => 10],
            ['from' => 'C', 'to' => 'B', 'cost' => 11],
            ['from' => 'B', 'to' => 'D', 'cost' => 10],
            ['from' => 'D', 'to' => 'B', 'cost' => 11],
            ['from' => 'B', 'to' => 'E', 'cost' => 20],
            ['from' => 'E', 'to' => 'B', 'cost' => 21],
            ['from' => 'C', 'to' => 'D', 'cost' => 10],
            ['from' => 'D', 'to' => 'C', 'cost' => 11],
            ['from' => 'C', 'to' => 'E', 'cost' => 11],
            ['from' => 'E', 'to' => 'C', 'cost' => 12],
            ['from' => 'D', 'to' => 'E', 'cost' => 44],
            ['from' => 'E', 'to' => 'D', 'cost' => 45]
        ]);
        $this->assertEquals(['path' => ['A', 'B', 'E'], 'cost' => 31], $result);
    }

    /**
     * @expectedException \HomeWork2\FindIt\Exception\ImpossiblePath
     */
    public function testImpossibleRoute()
    {
        AStar::calc('A', 'D', [
            ['from' => 'A', 'to' => 'B', 'cost' => 5],
            ['from' => 'B', 'to' => 'A', 'cost' => 6],
            ['from' => 'C', 'to' => 'D', 'cost' => 5],
            ['from' => 'D', 'to' => 'C', 'cost' => 6]
        ]);
    }
}