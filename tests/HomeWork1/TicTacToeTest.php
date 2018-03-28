<?php

namespace Tests\Day1;

use HomeWork1\TicTacToe;
use PHPUnit\Framework\TestCase;

class TicTacToeTest extends TestCase
{
    public function test_it_count_1()
    {
        $tic = new TicTacToe();

        $ttt = [
            ['o', 'x', 'o'],
            ['x', 'o', 'o'],
            ['x', 'o', null],
        ];

        $this->assertEquals(false, $tic->check($ttt));
    }

    public function test_it_count_2()
    {
        $tic = new TicTacToe();

        $ttt = [
            ['x', 'x', 'o'],
            ['x', 'x', null],
            ['o', 'o', 'o'],
        ];

        $this->assertEquals('o', $tic->check($ttt));
    }

    public function test_it_count_3()
    {
        $tic = new TicTacToe();

        $ttt = [
            ['o', null, 'o'],
            ['o', 'x', 'x'],
            ['o', 'x', 'x'],
        ];

        $this->assertEquals('o', $tic->check($ttt));
    }

    public function test_it_count_4()
    {
        $tic = new TicTacToe();

        $ttt = [
            ['o', 'x', 'x'],
            ['x', 'o', 'x'],
            ['o', 'x', 'o'],
        ];

        $this->assertEquals('o', $tic->check($ttt));
    }

    public function test_it_count_5()
    {
        $tic = new TicTacToe();

        $ttt = [
            [null, 'x', 'o'],
            ['x', 'o', 'x'],
            ['o', 'x', 'o'],
        ];

        $this->assertEquals('o', $tic->check($ttt));
    }
}
