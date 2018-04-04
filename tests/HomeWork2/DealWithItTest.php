<?php

use HomeWork2\DealWithIt;
use PHPUnit\Framework\TestCase;

class DealWithItTest extends TestCase
{
    /** @var DealWithIt */
    private $emailReplacer;

    public function setUp()
    {
        $this->emailReplacer = new DealWithIt();
    }

    public function test_one()
    {
        $this->assertEquals(
            "Example @test ****************",
            $this->emailReplacer->replace("Example @test test@example.com")
        );
    }

    public function test_several()
    {
        $this->assertEquals(
            "Multiemails ***************** + ********************",
            $this->emailReplacer->replace(
                "Multiemails 66666@example.com + anotherOne@gmail.com")
        );
    }
}
