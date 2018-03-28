<?php

namespace HomeWork1;

class Parser
{
    /** @var string */
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getLinks()
    {
        trim($this->text);
        preg_match('/href=(\'|")(.*)(\'|")>/', $this->text, $matches);
        return $matches[2] ?? '';
    }

    public function getPhones()
    {
        preg_match('/((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}/', $this->text, $matches);

        return trim($matches[0] ?? '');
    }
}
