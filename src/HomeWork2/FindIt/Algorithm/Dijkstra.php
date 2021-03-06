<?php

namespace HomeWork2\FindIt\Algorithm;

use HomeWork2\FindIt\Graph;
use HomeWork2\FindIt\Node;

/**
 * https://en.wikipedia.org/wiki/Dijkstra%27s_algorithm
 * @package HomeWork2\FindIt
 */
class Dijkstra
{
    protected $startingNode;
    protected $endingNode;
    protected $graph;
    protected $paths = [];
    protected $solution = false;

    /**
     * @param Graph $graph
     */
    public function __construct(Graph $graph)
    {
        $this->graph = $graph;
    }

    /**
     * @return integer
     * @throws \Exception
     */
    public function getDistance()
    {
        if (!$this->isSolved()) {
            throw new \Exception("Cannot calculate the distance of a non-solved algorithm:\nDid you forget to call ->solve()?");
        }
        return $this->getEndingNode()->getPotential();
    }

    /**
     * @return Node
     */
    public function getEndingNode()
    {
        return $this->endingNode;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getLiteralShortestPath()
    {
        $path = $this->solve();
        $literal = '';
        foreach ($path as $p) {
            $literal .= "{$p->getId()} - ";
        }
        return substr($literal, 0, mb_strlen($literal) - 3);
    }

    /**
     * @return array
     */
    public function getShortestPath()
    {
        $path = array();
        $node = $this->getEndingNode();
        while ($node->getId() != $this->getStartingNode()->getId()) {
            $path[] = $node;
            $node = $node->getPotentialFrom();
        }
        $path[] = $this->getStartingNode();
        return array_reverse($path);
    }

    /**
     * @return Node
     */
    public function getStartingNode()
    {
        return $this->startingNode;
    }

    /**
     * @param Node $node
     */
    public function setEndingNode(Node $node)
    {
        $this->endingNode = $node;
    }

    /**
     * @param Node $node
     */
    public function setStartingNode(Node $node)
    {
        $this->paths[] = array($node);
        $this->startingNode = $node;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function solve()
    {
        if (!$this->getStartingNode() || !$this->getEndingNode()) {
            throw new \Exception("Cannot solve the algorithm without both starting and ending nodes");
        }
        $this->calculatePotentials($this->getStartingNode());
        $this->solution = $this->getShortestPath();
        return $this->solution;
    }

    /**
     * @param Node $node
     * @throws \Exception
     */
    protected function calculatePotentials(Node $node)
    {
        $connections = $node->getConnections();
        $sorted = array_flip($connections);
        krsort($sorted);
        foreach ($connections as $id => $distance) {
            $v = $this->getGraph()->getNode($id);
            $v->setPotential($node->getPotential() + $distance, $node);
            foreach ($this->getPaths() as $path) {
                $count = count($path);
                if ($path[$count - 1]->getId() === $node->getId()) {
                    $this->paths[] = array_merge($path, array($v));
                }
            }
        }
        $node->markPassed();
        foreach ($sorted as $id) {
            $node = $this->getGraph()->getNode($id);
            if (!$node->isPassed()) {
                $this->calculatePotentials($node);
            }
        }
    }

    /**
     * @return Graph
     */
    protected function getGraph()
    {
        return $this->graph;
    }

    /**
     * @return Node[]
     */
    protected function getPaths()
    {
        return $this->paths;
    }

    /**
     * @return boolean
     */
    protected function isSolved()
    {
        return (bool) $this->solution;
    }
}
