<?php

namespace Tests\Day1;

use HomeWork1\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_it_count_1()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(1, $fizzBuzz->calculator(1));
    }

    public function test_it_count_2()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(2, $fizzBuzz->calculator(2));
    }

    public function test_it_count_3()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzBuzz->calculator(3));
    }

    public function test_it_count_4()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(4, $fizzBuzz->calculator(4));
    }

    public function test_it_count_5()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzBuzz->calculator(5));
    }

    public function test_it_count_6()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzBuzz->calculator(6));
    }

    public function test_it_count_10()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzBuzz->calculator(10));
    }

    public function test_it_count_15()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizzBuzz->calculator(15));
    }
}
