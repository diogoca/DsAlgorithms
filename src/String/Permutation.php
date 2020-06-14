<?php

namespace DsAlgorithms\String;

class Permutation
{
    private static function swap(&$word, $i, $j)
    {
        $aux = $word[$j];
    
        $word[$j] = $word[$i];
        $word[$i] = $aux;
    }
    
    private static function recursivePermute($word, $i, $j)
    {
        if ($i === $j) {
            echo $word . PHP_EOL;
            return;
        }
    
        for($k = $i ; $k <= $j ; $k++) {
            self::swap($word, $i, $k);
            self::recursivePermute($word, $i + 1, $j);
            self::swap($word, $k, $i); # backtrack
        }
    
    }
    
    public static function permute($word)
    {
        self::recursivePermute($word, 0, strlen($word) - 1);
    }
    
}

// abc = a + p(bc) = abc acb
// bac = b + p(ac) = bac bca
// cba = c + p(ba) = cba cab

// Permutation::permute('abc');