<?php

namespace DsAlgorithms\Sort;

/**
 * BubbleSort Algorithm
 * Average complexity: O(n²)
 */
class BubbleSort implements ArraySort
{
    private static function swap(array &$arr, int $i, int $j)
    {
        $aux = $arr[$j];
    
        $arr[$j] = $arr[$i];
        $arr[$i] = $aux;
    }

    private static function recursiveSort(array &$arr, int $end)
    {
        if ($end < 0) {
            return;
        }

        for ($i = 0; $i < $end; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                self::swap($arr, $i, $i + 1);
            }
        }

        self::recursiveSort($arr, --$end);
    }

    public static function sort(array &$arr)
    {
        if (empty($arr)) {
            return;
        }

        self::recursiveSort($arr, sizeof($arr) - 1);
    }
}
