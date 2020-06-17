<?php

namespace DsAlgorithms\Sort;

class InsertionSort implements ArraySort
{
    private static function swap(array &$arr, int $i, int $j)
    {
        $aux = $arr[$j];
    
        $arr[$j] = $arr[$i];
        $arr[$i] = $aux;
    }

    private static function insertionSort(&$arr, $i, $j)
    {
        for ($k = $i; $k < $j; $k++) {
            if ($arr[$k] > $arr[$k - 1]) {
                continue;
            }
            self::swap($arr, $k - 1, $k);
            
            /**
             * $k - 1 are now on our subset
             * checking if there's any greater
             */
            for ($l = 0; $l < $k - 1; $l++) {
                if ($arr[$k - 1] > $arr[$l]) {
                    continue;
                }
                self::swap($arr, $k - 1, $l);
            }
        }
    }

    public static function sort(array &$arr)
    {
        if (empty($arr)) {
            return;
        }

        self::insertionSort($arr, 1, sizeof($arr));
    }
}
