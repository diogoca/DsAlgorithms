<?php

namespace DsAlgorithms\Ds\Queue;

use DsAlgorithms\Ds\Node;

/**
 * Linear Linked Queue (FIFO)
 */
class LinkedQueue
{
    /**
     * First element
     *
     * @var Node
     */
    private $head;

    /**
     * Last element
     *
     * @var Node
     */
    private $tail;

    /**
     * Queue size
     *
     * @var int
     */
    private $size;

    public function __construct()
    {
        $this->size = 0;
    }

    public function enqueue($data)
    {
        $node = new Node($data);

        if ($this->size == 0) {
            $this->tail = $node;
            $this->head = $this->tail;
            $this->size++;
            return;
        }
        
        $this->tail->next = $node;
        $this->tail = $this->tail->next;
        $this->size++;
    }

    public function dequeue() 
    {
        if ($this->size === 0) {
            return null;
        }
        
        $data = $this->head->data;
        
        if ($this->size > 1) {
            $this->head = $this->head->next;
        }

        $this->size--;
        
        return $data;
    }

    public function size()
    {
        return $this->size;
    }

    public function first() : Node 
    {
        return $this->head;
    }

    public function last() : Node
    {
        return $this->last;
    }

    public function __toString()
    {
        $cursor = $this->head;
        $toString = "({$this->size}) ";

        while($cursor !== null) {
            $toString .= "$cursor->data ";
            $cursor = $cursor->next;
        }

        return $toString . PHP_EOL;
    }
    
}



$linkedQueue = new LinkedQueue;
$linkedQueue->enqueue('Priscila');
$linkedQueue->enqueue('Diogo');
$linkedQueue->enqueue('Nath');
$linkedQueue->enqueue('Mozi');
$linkedQueue->enqueue('Silva');

echo $linkedQueue;

echo 'Dequeued ' . $linkedQueue->dequeue() . PHP_EOL;
echo 'Dequeued ' . $linkedQueue->dequeue() . PHP_EOL;

echo $linkedQueue;

echo 'Dequeued ' . $linkedQueue->dequeue() . PHP_EOL;
echo $linkedQueue;

