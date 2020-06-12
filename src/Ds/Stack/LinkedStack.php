<?php

namespace DsAlgorithms\Ds\Stack;

use DsAlgorithms\Ds\Node;

/**
 * Stack using Nodes (LIFO)
 */
class LinkedStack implements Stack
{

    const MAX_ELEMENTS = 5;

    /**
     * Top element
     *
     * @var Node
     */
    private $head;

    /**
     * Number of elements in Stack
     *
     * @var int
     */
    private $size;

    public function __construct()
    {
        $this->size = 0;
    }
       
    /**
     * Insert the element into linked list nothing but which
     * is the top node of Stack
     *
     * @param mixed $data
     * @return void
     */
    public function push($data)
    {
        if ($this->isFull()) {
            throw new \OverflowException('Stack is full');
        }

        if ($this->head == null) {
            $this->head = new Node($data);
            $this->size++;
            return;
        }

        $node = new Node($data);
        $node->next = $this->head;
        $this->head = $node;
        $this->size++;
    }

    /**
     * Return top element from the Stack and move the top pointer
     * to the second node of linked list or Stack
     *
     * @return mixed
     */
    public function pop()
    {
        if ($this->isEmpty()) {
            return;
        }

        $data = $this->head->data;
        $this->head = $this->head->next;
        $this->size--;

        return $data;
    }

    /**
     * Return the top element
     *
     * @return mixed
     */
    public function peek()
    {
        if ($this->isEmpty()) {
            return;
        }

        return $this->head->data;
    }

    public function isFull()
    {
        return $this->size === self::MAX_ELEMENTS;
    }

    public function isEmpty()
    {
        return $this->size === 0;
    }

    public function __toString()
    {
        $cursor = $this->head;
        $toString = "({$this->size}) ";

        while ($cursor !== null) {
            $toString .= "$cursor->data ";
            $cursor = $cursor->next;
        }

        return $toString . PHP_EOL;
    }
}

// $stack = new LinkedStack;
// $stack->push('1');
// $stack->push('2');
// $stack->push('3');
// $stack->push('4');

// echo $stack;
// echo 'Top: ' . $stack->peek() . PHP_EOL;

// $stack->pop();

// echo $stack;
// echo 'Top: ' . $stack->peek() . PHP_EOL;


// $stack->pop();
// $stack->pop();
// $stack->pop();
// $stack->pop();

// echo $stack;
// echo 'Top: ' . $stack->peek() . PHP_EOL;

// $stack->push('1');
// echo $stack;
