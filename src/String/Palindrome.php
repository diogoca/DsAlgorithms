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
        return self::isPalindromeRecursive($word, 0, \strlen($word) - 1);
    }
    
    public static function isPalindromeIterative($word)
    {
        $lastIndex = \strlen($word) - 1;

        for ($i = 0 , $j = $lastIndex; $i <= $lastIndex; $i++ , $j--) {
            if ($word[$i] !== $word[$j]) {
                return false;
            }
        }

        return true;
    }
}

// $start = microtime(true);

// var_dump(Palindrome::isPalindrome('foo'));
// var_dump(Palindrome::isPalindrome('ovo'));

// echo 'Recursive execution time ', microtime(true) - $start . PHP_EOL;

// $start = microtime(true);

// var_dump(Palindrome::isPalindromeIterative('foo'));
// var_dump(Palindrome::isPalindromeIterative('ovo'));

// echo 'Iterative execution time ', microtime(true) - $start . PHP_EOL;
