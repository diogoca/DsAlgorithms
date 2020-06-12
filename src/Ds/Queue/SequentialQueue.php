<?php

namespace DsAlgorithms\Ds\Queue;

/**
 * Sequential Array Queue (FIFO)
 */
class SequentialQueue implements Queue
{
    const MAX_ELEMENTS = 5;

    /**
     * Data elements
     *
     * @var \SplFixedArray
     */
    private $data;

    /**
     * Index of head element
     *
     * @var int
     */
    private $head;

    /**
     * Index of tail element
     *
     * @var int
     */
    private $tail;

    /**
     * Number of elements on queue
     *
     * @var int
     */
    private $size;

    public function __construct()
    {
        $this->data = new \SplFixedArray(self::MAX_ELEMENTS);
        $this->size = 0;
        $this->head = 0;
        $this->tail = -1;
    }

    public function enqueue($data)
    {
        if ($this->isFull()) {
            throw new \OverflowException('Queue is full');
        }

        $index = ($this->tail + 1) % self::MAX_ELEMENTS;

        $this->data[$index] = $data;
        $this->tail = $index;
        $this->size++;
    }
    
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return;
        }

        $data = $this->data[$this->head];
        $this->data[$this->head] = null;
        
        $this->head = ($this->head + 1) % self::MAX_ELEMENTS;
        $this->size--;

        return $data;
    }

    public function size()
    {
        return $this->size;
    }

    public function first()
    {
        return $this->data[$this->head];
    }
    
    public function last()
    {
        return $this->data[$this->tail];
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
        $toString = "(size: {$this->size}, head: {$this->head} , tail: {$this->tail}) ";

        for ($i = $this->head; $i <= $this->tail; $i++) {
            $toString .= "{$this->data[$i]} ";
        }

        return $toString . PHP_EOL;
    }
}

// $sequentialQueue = new SequentialQueue;
// $sequentialQueue->enqueue('Priscila');
// $sequentialQueue->enqueue('Diogo');
// $sequentialQueue->enqueue('Nath');
// $sequentialQueue->enqueue('Mozi');
// $sequentialQueue->enqueue('Silva');

// echo $sequentialQueue;

// echo 'Dequeued ' . $sequentialQueue->dequeue() . PHP_EOL;
// echo 'Dequeued ' . $sequentialQueue->dequeue() . PHP_EOL;

// echo $sequentialQueue;

// echo 'Dequeued ' . $sequentialQueue->dequeue() . PHP_EOL;
// echo $sequentialQueue;

// echo 'Dequeued ' . $sequentialQueue->dequeue() . PHP_EOL;
// echo $sequentialQueue;

// echo 'Dequeued ' . $sequentialQueue->dequeue() . PHP_EOL;
// echo $sequentialQueue;

// echo 'Dequeued ' . $sequentialQueue->dequeue() . PHP_EOL;
// echo $sequentialQueue;

// echo 'Dequeued ' . $sequentialQueue->dequeue() . PHP_EOL;
// echo $sequentialQueue;


// $sequentialQueue->enqueue('Gepeto');
// echo $sequentialQueue;

// $sequentialQueue->enqueue('Maria');
// echo $sequentialQueue;
