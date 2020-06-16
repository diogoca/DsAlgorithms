<?php

namespace DsAlgorithms\String;

class Palindrome
{
    private static function isPalindromeRecursive($word, $i, $j)
    {
        if ($word[$i] !== $word[$j]) {
            return false;
        }

        if ($i === $j) {
            return true;
        }

        return self::isPalindromeRecursive($word, $i + 1, $j - 1);
    }

    public static function isPalindrome($word)
    {
        if (empty($word)) {
            return;
        }

        return self::isPalindromeRecursive($word, 0, \strlen($word) - 1);
    }
    
    public static function isPalindromeIterative($word)
    {
        if (empty($word)) {
            return;
        }
        
        $lastIndex = \strlen($word) - 1;

        for ($i = 0 , $j = $lastIndex; $i <= $lastIndex; $i++ , $j--) {
            if ($word[$i] !== $word[$j]) {
                return false;
            }
        }

        return true;
    }
}
