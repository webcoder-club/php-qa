<?php

namespace HomeWork1;

class SecondMax
{
    public function calculator(array $arr): ?int
    {
        $arr = array_unique($arr);
        rsort($arr);
        return $arr[1] ?? null;
    }
}
