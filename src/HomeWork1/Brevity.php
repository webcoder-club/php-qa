<?php

namespace HomeWork1;

class Brevity
{
    public function calculator(string $name): string
    {
        $names = explode(' ', $name, 3);
        $names[1] = $this->getFistLetter($names[1]);

        if (isset($names[2])) {
            $names[2] = $this->getFistLetter($names[2]);
            $name = sprintf('%s %s. %s.', $names[0], $names[1], $names[2]);
        } else {
            $name = sprintf('%s %s.', $names[0], $names[1]);
        }

        return $name;
    }

    private function getFistLetter($str)
    {
        return mb_substr($str, 0, 1);
    }
}
