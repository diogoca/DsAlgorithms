<?php

namespace DsAlgorithms\Ds;

class Node
{
    /**
     * Node data
     *
     * @var mixed
     */
    public $data;

    /**
     * Next Node
     *
     * @var Node
     */
    public $next;

    public function __construct($data, Node $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }

    public function __toString()
    {
        return "[ {$this->data} ]";
    }
}
