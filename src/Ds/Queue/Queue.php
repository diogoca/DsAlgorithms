<?php

namespace DsAlgorithms\Ds\Queue;

interface Queue
{
    public function enqueue($data);
    public function dequeue();
    public function size();
}
