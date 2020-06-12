<?php

namespace DsAlgorithms\Ds\Stack;

interface Stack
{
    public function push($data);
    public function pop();
    public function peek();
    public function isFull();
    public function isEmpty();
}
