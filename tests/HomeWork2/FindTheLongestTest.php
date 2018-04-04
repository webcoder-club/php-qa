<?php

use HomeWork2\FindLongest;
use PHPUnit\Framework\TestCase;

class FindLongestTest extends TestCase
{
    /** @var FindLongest */
    private $string;

    public function setUp()
    {
        $this->string = new FindLongest();
    }

    public function test_1()
    {
        $this->assertEquals(
            [
                'Lorem',
                'ipsum',
                'dolor',
            ],
            $this->string->findLongest("Lorem ipsum dolor sit amet")
        );
    }

    public function test_space()
    {
        $this->assertEquals(
            ["пробелов"],
            $this->string->findLongest("много                    пробелов")
        );
    }

    public function test_2()
    {
        $this->assertEquals(
            ['остальные'],
            $this->string->findLongest("Одно длинное слово, остальные короткие")
        );
    }

    public function test_same_len()
    {
        $this->assertEquals(
            ["Всем", "same", "size"],
            $this->string->findLongest("Всем same size")
        );
    }

    public function test_punctuation()
    {
        $this->assertEquals(
            ["Вырезаем"],
            $this->string->findLongest("Вырезаем знаки пуктуац?")
        );
    }
}
