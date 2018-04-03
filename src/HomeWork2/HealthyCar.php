<?php

namespace HomeWork2;

class HealthyCar
{
    public function solveTransportationProblem(array $stone_heaps): array
    {
        rsort($stone_heaps);

        $max_capacity_tons = 30;
        $trucks = [];

        while (!empty($stone_heaps)) {
            $truck = ['total_weight' => 0, 'items' => []];

            foreach ($stone_heaps as $k => $heap_weight) {
                if ($truck['total_weight'] + $heap_weight <= $max_capacity_tons) {
                    $truck['total_weight'] += $heap_weight;
                    $truck['items'][] = $heap_weight;
                    unset($stone_heaps[$k]);
                }
            }

            $trucks[] = $truck;
        }

        return $trucks;
    }

    public function generateStoneHeaps(int $heaps_count = 20): array
    {
        $min_weight_kg = 1;
        $max_weight_kg = 20000;

        $stone_heaps = [];

        for ($i = 0; $i < $heaps_count; $i++) {
            $rand = mt_rand($min_weight_kg, $max_weight_kg);
            $stone_heaps[] = $rand / 1000;
        }

        return $stone_heaps;
    }
}