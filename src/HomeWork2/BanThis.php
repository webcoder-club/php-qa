<?php

namespace HomeWork2;

class BanThis
{
    public function getDoubles(array $array, $count = 2): array
    {
        $doublesStats = array_count_values($array);

        $onlyDoubles = array_filter($array, function ($item) use ($doublesStats, $count) {
            return isset($doublesStats[$item]) && $doublesStats[$item] >= $count;
        });

        return $onlyDoubles;
    }
}