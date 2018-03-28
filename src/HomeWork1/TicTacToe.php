<?php

namespace HomeWork1;

class TicTacToe
{
    private const win = 3;

    private $arr;

    public function check($arr)
    {
        $this->arr = $arr;

        $result = [
            $this->checkHorizons(),
            $this->checkVerticals(),
            $this->checkDiagonals(),
        ];

        $result = array_filter($result);
        return array_pop($result) ?? false;
    }

    public function checkHorizons()
    {
        $result = [0, 0, 0];

        foreach ($this->arr as $key => $line) {
            $first = array_filter($line)[0] ?? null;
            foreach ($line as $element) {
                if ($element == $first) {
                    $result[$key]++;
                }
            }
        }

        if (in_array(self::win, $result)) {
            $winner = array_search(self::win, $result);
            return $this->arr[$winner][0];
        }

        return false;
    }

    private function checkVerticals()
    {
        $result = [0, 0, 0];

        for ($y = 0; $y < self::win; $y++) {
            for ($x = 0; $x < self::win; $x++) {
                if ($this->arr[$y][$x] == $this->arr[$x][0]) {
                    $result[$x]++;
                }
            }
        }

        if (in_array(self::win, $result)) {
            $winner = array_search(self::win, $result);
            return $this->arr[0][$winner];
        }

        return false;
    }

    private function checkDiagonals()
    {
        $result = [0, null, 0];

        for ($y = 0; $y < self::win; $y++) {
            if ($this->arr[$y][$y] == $this->arr[0][0]) {
                $result[0]++;
            }

            if ($this->arr[$y][self::win - 1 - $y] == $this->arr[0][2]) {
                $result[2]++;
            }
        }

        if (in_array(self::win, $result)) {
            $winner = array_search(self::win, $result);
            return $this->arr[0][$winner];
        }

        return false;
    }
}
