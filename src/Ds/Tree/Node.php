<?php

namespace DsAlgorithms\Ds\Tree;

class Node
{
     /**
     * Node data
     *
     * @var mixed
     */
    public $data;

    /**
     * Left node
     *
     * @var Node
     */
    public $left;
    
    /**
     * Right node
     *
     * @var Node
     */
    public $right;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
