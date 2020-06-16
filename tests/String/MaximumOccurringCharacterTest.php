<?php

namespace DsAlgorithms\Test\Sort;

use PHPUnit\Framework\TestCase;

use DsAlgorithms\String\MaximumOccurringCharacter;

class MaximumOccurringCharacterTest extends TestCase
{
    public function testEmptyString()
    {
        $this->assertNull(MaximumOccurringCharacter::max(''));
    }

    public function testMaximumOccurringCharacter()
    {
        $this->assertEquals(MaximumOccurringCharacter::max('abbbaacc'), 'a');
        $this->assertEquals(MaximumOccurringCharacter::max('helloworld'), 'l');
        $this->assertEquals(MaximumOccurringCharacter::max('abcdefghikjkakjiuiu'), 'i');
        $this->assertEquals(MaximumOccurringCharacter::max('0a0000bcdefghikjkakjiuiu'), '0');
        $this->assertEquals(MaximumOccurringCharacter::max('Z0a0ZZZZ000bcdefghikjkakjiuiu'), '0');
    }
}
