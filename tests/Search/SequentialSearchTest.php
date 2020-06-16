<?php

namespace DsAlgorithms\Test\Search;

use PHPUnit\Framework\TestCase;

use DsAlgorithms\Search\SequentialSearch;

class SequentialSearchTest extends TestCase
{
    public function testEmptyArray()
    {
        $this->assertNull(SequentialSearch::search([], 1));
    }

    public function testNonExistNeedle()
    {
        $this->assertNull(SequentialSearch::search([3, 4, 5], 1));
    }

    public function testValidNeedle()
    {
        $this->assertEquals(7, SequentialSearch::search(\range(7, 14), 14));
        $this->assertEquals(8, SequentialSearch::$calls);
    }
}
