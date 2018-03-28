<?php

namespace HomeWork1;

class FizzBuzz
{
    public function calculator(int $i)
    {
        $mod3 = $i % 3;
        $mod5 = $i % 5;

        return (!$mod3 && !$mod5 ? "FizzBuzz" : (!$mod3 ? "Fizz" : (!$mod5 ? "Buzz" : $i)));
    }
}
