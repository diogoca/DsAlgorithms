<?php

namespace DsAlgorithms\Ds\Stack;

/**
 * Stack using array (LIFO)
 */
class SequentialStack implements Stack
{
    const MAX_ELEMENTS = 5;

    /**
     * Data elements
     *
     * @var \SplFixedArray
     */
    private $data;

    /**
     * Number of elements in Stack
     *
     * @var int
     */
    private $size;

    /**
     * Index of last element pushed
     *
     * @var int
     */
    private $last;

    public function __construct()
    {
        $this->data = new \SplFixedArray(self::MAX_ELEMENTS);
        $this->size = 0;
        $this->last = -1;
    }

    public function push($data)
    {
        if ($this->isFull()) {
            throw new \OverflowException('Stack is full');
        }

        $this->data[++$this->last] = $data;
        $this->size++;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return;
        }

        $data = $this->data[$this->last];
        $this->data[$this->last--] = null;
        $this->size--;

        return $data;
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            return;
        }

        return $this->data[$this->last];
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
        $toString = "({$this->size}) ";

        for ($i = 0; $i < $this->size; $i++) {
            $toString .= "{$this->data[$i]} ";
        }

        return $toString . PHP_EOL;
    }
}

// $stack = new SequentialStack;
// $stack->push('1');
// $stack->push('2');
// $stack->push('3');
// $stack->push('4');

// echo $stack;

// echo 'Top: ' . $stack->peek() . PHP_EOL;
// echo 'Pop: ' . $stack->pop() . PHP_EOL;
// echo $stack;

// echo 'Pop: ' . $stack->pop() . PHP_EOL;
// echo 'Top: ' . $stack->peek() . PHP_EOL;
// echo $stack;

// echo 'Pop: ' . $stack->pop() . PHP_EOL;
// echo 'Top: ' . $stack->peek() . PHP_EOL;
// echo $stack;

// echo 'Pop: ' . $stack->pop() . PHP_EOL;
// echo 'Pop: ' . $stack->pop() . PHP_EOL;
// echo $stack;
