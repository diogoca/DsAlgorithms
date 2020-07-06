<?php

namespace DsAlgorithms\Test\Sort;

use PHPUnit\Framework\TestCase;

use DsAlgorithms\String\ReverseString;

class ReverseStringTest extends TestCase
{
    public function testEmptyString()
    {
        $this->assertNull(ReverseString::reverse(''));
    }

    public function testStringReversed()
    {
        $this->assertEquals('oof', ReverseString::reverse('foo'));
    }
}
