<?php

namespace DsAlgorithms\String;

/**
 * Permutations of string
 * Complexity: O(n * n!)
 *
 * Example:
 * abc = a + p(bc) = abc acb
 * bac = b + p(ac) = bac bca
 * cba = c + p(ba) = cba cab
 */
class Permutation
{
    private static function swap(&$word, $i, $j)
    {
        $aux = $word[$j];
    
        $word[$j] = $word[$i];
        $word[$i] = $aux;
    }
    
    private static function recursivePermute($word, $i, $j, &$permutations)
    {
        if ($i === $j) {
            $permutations[] = $word;
            return;
        }
    
        for ($k = $i; $k <= $j; $k++) {
            self::swap($word, $i, $k);
            self::recursivePermute($word, $i + 1, $j, $permutations);
            self::swap($word, $k, $i); # backtrack
        }
    }
    
    public static function permute($word)
    {
        if (empty($word)) {
            return;
        }
        
        $permutations = [];

        self::recursivePermute($word, 0, strlen($word) - 1, $permutations);

        return $permutations;
    }
}
