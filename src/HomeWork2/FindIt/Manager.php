<?php

namespace HomeWork2\FindIt;

use HomeWork2\FindIt\Algorithm\Dijkstra;

class Manager
{
    public function execute($from_name, $to_name, $routes)
    {
        $graph = new Graph();
        foreach ($routes as $route) {
            $from = $route['from'];
            $to = $route['to'];
            $price = $route['price'];

            if (!array_key_exists($from, $graph->getNodes())) {
                $from_node = new Node($from);
                $graph->add($from_node);
            } else {
                $from_node = $graph->getNode($from);
            }

            if (!array_key_exists($to, $graph->getNodes())) {
                $to_node = new Node($to);
                $graph->add($to_node);
            } else {
                $to_node = $graph->getNode($to);
            }

            $from_node->connect($to_node, $price);
        }


        $g = new Dijkstra($graph); // @todo: Заменять на другой алгоритм, не забыть отнаследоваться
        $start_node = $graph->getNode($from_name);
        $end_node = $graph->getNode($to_name);
        $g->setStartingNode($start_node);
        $g->setEndingNode($end_node);

        echo new Result(
            $start_node->getId(),
            $end_node->getId(),
            $g->getLiteralShortestPath(),
            $g->getDistance()
        );
    }

}
