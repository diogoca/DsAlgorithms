<?php

namespace DsAlgorithms\Test\Sort;

use PHPUnit\Framework\TestCase;

use DsAlgorithms\String\Palindrome;

class PalindromeTest extends TestCase
{
    public function testEmptyString()
    {
        $this->assertNull(Palindrome::isPalindrome(''));
        $this->assertNull(Palindrome::isPalindromeIterative(''));
    }

    public function testPalindrome()
    {
        $this->assertTrue(Palindrome::isPalindrome('arara'));
        $this->assertTrue(Palindrome::isPalindromeIterative('arara'));
    }

    public function testNonPalindrome()
    {
        $this->assertFalse(Palindrome::isPalindrome('foo'));
        $this->assertFalse(Palindrome::isPalindromeIterative('bar'));
    }
}
