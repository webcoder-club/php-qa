<?php

use HomeWork2\BanThis;
use PHPUnit\Framework\TestCase;

class BanThisItemsTest extends TestCase
{
    /** @var BanThis */
    private $banHammer;

    public function setUp()
    {
        $this->banHammer = new BanThis();
    }

    public function test_1()
    {
        $this->assertEquals(
            [
                0 => "котик",
                3 => "котик",
            ],
            $this->banHammer->getDoubles([
                "котик",
                "собака",
                "птичка",
                "котик"
            ])
        );
    }

    public function test_zero()
    {
        $this->assertEquals(
            [],
            $this->banHammer->getDoubles([
                "котик",
                "собака",
                "птичка"
            ])
        );
    }

    public function test_lat()
    {
        $this->assertEquals(
            [
                "котик",
                "собачка",
                "котик",
                "собачка",
            ],
            $this->banHammer->getDoubles([
                "котик",
                "собачка",
                "котик",
                "собачка",
            ])
        );
    }
}