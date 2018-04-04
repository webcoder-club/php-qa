<?php

namespace HomeWork2\FindIt;

class Result
{
    private $from;

    private $to;

    private $route;

    private $distance;

    public function __construct($from, $to, string $route, int $distance)
    {
        $this->from = $from;
        $this->to = $to;
        $this->route = $route;
        $this->distance = $distance;
    }

    public function __toString(): string
    {
        return "From: " . $this->from . PHP_EOL .
               "To: " . $this->to . PHP_EOL .
               "Route: " . $this->route . PHP_EOL .
               "Distance: " . $this->distance . PHP_EOL;
    }
}