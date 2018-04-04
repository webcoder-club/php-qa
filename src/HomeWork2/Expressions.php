<?php

namespace HomeWork2;

class Expressions
{
    private $opening = [
        '(',
        '[',
        '{',
    ];

    public function isValid(string $string): bool
    {
        $stack = [];
        $string = str_split($string);

        foreach ($string as $char) {
            if (in_array($char, $this->opening)) {
                $stack[] = $char;
            } else {
                if (!empty($stack)) {
                    $check = array_pop($stack);
                    if ($check == '(' && $char != ')') {
                        return false;
                    } elseif ($check == '[' && $char != ']') {
                        return false;
                    } elseif ($check == '{' && $char != '}') {
                        return false;
                    }
                } else {
                    return false;
                }
            }
        }
        if (!empty($stack)) {
            return false;
        }

        return true;
    }
}