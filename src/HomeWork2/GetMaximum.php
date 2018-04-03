<?php

namespace HomeWork2;

class GetMaximum
{
    public function getRange(array $array)
    {
        $answer = $array[0];
        $sum = $answer_l = $answer_r = 0;
        $minus_pos = -1;

        foreach ($array as $key => $value) {
            $sum += $value;

            if ($sum > $answer) {
                $answer = $sum;
                $answer_l = $minus_pos + 1;
                $answer_r = $key;
            }
            if ($sum < 0) {
                $sum = 0;
                $minus_pos = $key;
            }
        }

        return sprintf('Max sum from %d to %d is %d', $answer_l, $answer_r, $answer);
    }
}