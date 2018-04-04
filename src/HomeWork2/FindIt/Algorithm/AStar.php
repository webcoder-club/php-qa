<?php

namespace HomeWork2\FindIt;

use HomeWork2\FindIt\Exception\ImpossiblePath;

/**
 * Class AStar
 * https://ru.wikipedia.org/wiki/A*
 * @package HomeWork2\FindIt
 */
class AStar
{
    public $start;
    public $goal;
    public $graph;
    private $closed_set;
    private $open_set;
    private $came_from;
    private $score;

    /**
     * @param $start
     * @param $goal
     * @param $graph
     * @return array
     */
    public static function calc($start, $goal, $graph)
    {
        $a = new self($start, $goal, $graph);
        return $a->runAStar();
    }

    /**
     * @param $start
     * @param $goal
     * @param $graph
     */
    private function __construct($start, $goal, $graph)
    {
        $this->start = $start;
        $this->goal = $goal;
        $this->graph = $graph;
        $this->came_from = [];
        $this->closed_set = [];
        $this->open_set = [$start => true];
        $this->score = [$start => 0];
    }

    /**
     * @return array
     */
    private function runAStar()
    {
        while (!empty($this->open_set)) {
            $current = $this->electCurrent();
            if ($current == $this->goal) {
                return $this->makeResult();
            }
            $this->markCurrentAsProcessed($current);
            $possibleDirections = $this->selectPossibleDirections($current);
            foreach ($possibleDirections as $direction) {
                $dest = $direction['to'];
                $this->open_set[$dest] = true;
                $tentative_score = $this->score[$current] + $direction['cost'];
                if ($this->isTentativeScoreBetter($tentative_score, $dest)) {
                    $this->came_from[$dest] = $current;
                    $this->score[$dest] = $tentative_score;
                }
            }
        }

        throw new ImpossiblePath();
    }

    /**
     * @return int|null
     */
    private function electCurrent()
    {
        $min = INF;
        $current = NULL;
        foreach ($this->score as $key => $value) {
            if ($this->open_set[$key] && $value < $min) {
                $min = $value;
                $current = $key;
            }
        }
        return $current;
    }

    /**
     * @return array
     */
    private function makeResult()
    {
        return [
            'path' => $this->reconstructPath(),
            'cost' => $this->score[$this->goal]
        ];
    }

    /**
     * @param $current
     */
    private function markCurrentAsProcessed($current)
    {
        unset($this->open_set[$current]);
        $this->closed_set[$current] = true;
    }

    /**
     * @param $current
     * @return array
     */
    private function selectPossibleDirections($current)
    {
        $result = [];
        foreach ($this->graph as $direction) {
            $from = $direction['from'];
            $to = $direction['to'];
            if (($from == $current) && !$this->closed_set[$to]) {
                $result[] = $direction;
            }
        }
        return $result;
    }

    /**
     * @param $tentative_score
     * @param $dest
     * @return bool
     */
    private function isTentativeScoreBetter($tentative_score, $dest)
    {
        return !$this->score[$dest] || ($tentative_score < $this->score[$dest]);
    }

    /**
     * @return array
     */
    private function reconstructPath()
    {
        $current = $this->goal;
        $result = [$current];
        while ($this->came_from[$current]) {
            $current = $this->came_from[$current];
            array_unshift($result, $current);
        }
        return $result;
    }
}