<?php

//優先度付きキュー拡張
class AdjustablePriorityQueue extends SplPriorityQueue
{

    protected $direction = 'desc';

    function compare($priority1, $priority2)
    {
        if ($this->direction == 'asc') {
            return parent::compare($priority2, $priority1);
        }
        return parent::compare($priority1, $priority2);
    }

    function setDirection($direction)
    {
        $this->direction = $direction;
    }
}

//test
$pq = new AdjustablePriorityQueue();
$pq->setDirection('asc');

$pq->insert('A', 2);
$pq->insert('B', 8);
$pq->insert('C', 7);

$out = clone $pq;

while ($out->valid()) {
    echo $out->extract() . "\n";
}