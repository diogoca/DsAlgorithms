<?php

namespace DsAlgorithms\Test\Search;

use PHPUnit\Framework\TestCase;

use DsAlgorithms\Search\BinarySearch;

class BinarySearchTest extends TestCase
{
    public function testEmptyArray()
    {
        $this->assertNull(BinarySearch::search([], 1));
    }

    public function testNonExistNeedle()
    {
        $this->assertNull(BinarySearch::search([3, 4, 5], 1));
    }

    public function testValidNeedle()
    {
        $this->assertEquals(7, BinarySearch::search(\range(7, 14), 14));
        $this->assertEquals(4, BinarySearch::$calls);
    }
}
