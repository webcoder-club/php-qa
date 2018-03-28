<?php

namespace Tests\Day1;

use HomeWork1\Brevity;
use PHPUnit\Framework\TestCase;

class BrevityTest extends TestCase
{
    public function test_it_count_iSomov()
    {
        $brevity = new Brevity();
        $this->assertEquals('Сомов И. А.', $brevity->calculator('Сомов Игорь Андреевич'));
    }

    public function test_it_count_vPravdivy()
    {
        $brevity = new Brevity();
        $this->assertEquals('Правдивый В.', $brevity->calculator('Правдивый Владимир'));
    }
}
