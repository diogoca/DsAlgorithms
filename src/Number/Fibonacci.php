<?php

namespace DsAlgorithms\Number;

class Fibonacci
{
    public static function sequence($n)
    {
        $i = 0;
        $j = 1;
        $k = 2; # numbers printered

        while ($k <= $n) {
            echo "$i ";
            $k++;

            echo "$j ";
            $k++;

            $i += $j;
            $j += $i;
        }
    }
}

// echo Fibonacci::sequence(20); # 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584 4181
