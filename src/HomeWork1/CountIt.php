<?php

namespace HomeWork1;

class CountIt
{
    public function solution(string $number, string $char): string
    {
        return substr_count($char, $number);
    }
}
