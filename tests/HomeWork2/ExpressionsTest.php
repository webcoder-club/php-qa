<?php

use HomeWork2\Expressions;
use PHPUnit\Framework\TestCase;

class ExpressionsTest extends TestCase
{
    /** @var Expressions */
    private $expr;

    public function setUp()
    {
        $this->expr = new \HomeWork2\Expressions();
    }

    public function test_true()
    {
        $this->assertTrue($this->expr->isValid('([])'));
    }

    public function test_false()
    {
        $this->assertFalse($this->expr->isValid('([)]'));
    }
}
