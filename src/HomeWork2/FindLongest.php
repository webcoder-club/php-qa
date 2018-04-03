<?php

namespace HomeWork2;

class FindLongest
{
    public function get(string $text)
    {
        $arr = array_flip(explode(' ', $text));

        foreach ($arr as $word => $length) {
            $arr[$word] = mb_strlen($word);
        }

        asort($arr);

        return array_slice($arr, -3, 3);
    }
}