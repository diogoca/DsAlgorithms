<?php

namespace DsAlgorithms\Test\Sort;

use PHPUnit\Framework\TestCase;

use DsAlgorithms\Sort\InsertionSort;

class InsertionSortTest extends TestCase
{
    public function testEmptyArray()
    {
        $arr = [];
        $this->assertNull(InsertionSort::sort($arr));
    }

    public function testValidArray()
    {
        $arr = [15, 5, 9, 10, 29, 1, 4, 22, 30, 2, 3];
        InsertionSort::sort($arr);
        $this->assertEquals([1, 2, 3, 4, 5, 9, 10, 15, 22, 29, 30], $arr);

        $arr = [50, 42, 8, 23, 74, 91, 13, 26, 66, 3, 18, 22];
        InsertionSort::sort($arr);
        $this->assertEquals([3, 8, 13, 18, 22, 23, 26, 42, 50, 66, 74, 91], $arr);
    }
}
