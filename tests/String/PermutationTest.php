<?php

namespace DsAlgorithms\Test\Sort;

use PHPUnit\Framework\TestCase;

use DsAlgorithms\String\Permutation;

class PermutationTest extends TestCase
{
    public function testEmptyString()
    {
        $this->assertNull(Permutation::permute(''));
    }

    public function testPermutation()
    {
        $this->assertEquals([
            'abc', 'acb', 'bac', 'bca', 'cba', 'cab'
        ], Permutation::permute('abc'));
    }
}
