<?php

namespace DsAlgorithms\Ds\DsList;

use DsAlgorithms\Ds\Node;

/**
 * Singly LinkedList
 */
class LinkedList implements DsList
{
    /**
     * Head node
     *
     * @var Node
     */
    private $head;

    /**
     * List size
     *
     * @var int
     */
    private $size;

    public function __construct(Node $node)
    {
        $this->head = $node;
        $this->size = 1;
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function addToHead(Node $node)
    {
        $node->next = $this->head;
        $this->head = $node;
        
        $this->size++;
    }

    public function addToTail(Node $node)
    {
        $cursor = $this->head;

        while ($cursor->next !== null) {
            $cursor = $cursor->next;
        }

        $cursor->next = $node;
        $this->size++;
    }

    public function getNodeBydata($data)
    {
        $cursor = $this->head;

        while ($cursor->next !== null) {
            if ($cursor->data === $data) {
                return $cursor;
            }
            $cursor = $cursor->next;
        }

        return null;
    }

    public function getNodeByPosition(int $position)
    {
        $cursor = $this->head;
        $i = 1;

        while ($cursor->next !== null) {
            if ($i === $position) {
                return $cursor;
            }
            $i++;
            $cursor = $cursor->next;
        }

        return null;
    }
    
    public function __toString()
    {
        $i = 0;
        $toString = "{$this->size}: ";
        $cursor = $this->head;

        while ($cursor !== null) {
            $toString .= $cursor;
            $i++;

            if ($i !== $this->size) {
                $toString .= ' => ';
            }

            $cursor = $cursor->next;
        }

        $toString .= PHP_EOL;

        return $toString;
    }
}

// $linkedList = new LinkedList(new Node('foo'));
// $linkedList->addToTail(new Node('bar'));
// $linkedList->addToTail(new Node('ney'));
// $linkedList->addToTail(new Node('silva'));
// $linkedList->addToHead(new Node('diogo'));

// echo $linkedList;
