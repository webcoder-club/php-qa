<?php

namespace Tests\Day1;

use HomeWork1\Parser;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{

    private $parser;

    public function setUp()
    {
        $string = <<<'HTML'
Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны,
а иногда <a href='https://example.com'>ссылки</a>
HTML;
        $this->parser = new Parser($string);
    }

    public function test_parse_phone()
    {
        $this->assertEquals('+7(985)808-86-90', $this->parser->getPhones());
    }

    public function test_parse_link()
    {
        $this->assertEquals('https://example.com', $this->parser->getLinks());
    }
}
