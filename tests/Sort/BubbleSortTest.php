<?php

namespace DsAlgorithms\Test\Sort;

use PHPUnit\Framework\TestCase;

use DsAlgorithms\Sort\BubbleSort;

class BubbleSortTest extends TestCase
{
    public function testEmptyArray()
    {
        $arr = [];
        $this->assertNull(BubbleSort::sort($arr));
    }

    public function testValidArray()
    {
        $arr = [15, 5, 9, 10, 29, 1, 4, 22, 30, 2, 3];

        BubbleSort::sort($arr);
        
        $this->assertEquals([1, 2, 3, 4, 5, 9, 10, 15, 22, 29, 30], $arr);
    }
}
