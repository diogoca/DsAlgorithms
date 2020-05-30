<?php

namespace Studies\SortAlgorithims;

/**
 * QuickSort Algorithm
 * 
 * Average complexity: O(n log n)
 * 
 * We can choose any element of array as pivot
 * for that implementation we choose last element
 * 
 * Best pivot: middle value
 * Worst: greatest or less value
 * 
 * After choose we put:
 * greater than pivot on right
 * less than pivot on left
 * 
 * Learned on:
 * https://blog.pantuza.com/artigos/o-algoritmo-de-ordenacao-quicksort
 */

class QuickSort
{
    private static function swap(array &$arr, int $i, int $j) {
        $aux = $arr[$j];
    
        $arr[$j] = $arr[$i];
        $arr[$i] = $aux;
    }
    
    private static function partition(array &$arr, int $start, int $end) : int {
        $i = $start;
        $pivot = $arr[$end];
        
        for ($j = $start ; $j < $end ; $j++) {
        
            if ($arr[$j] <= $pivot) {
                self::swap($arr, $i++, $j);
            }
        }
        self::swap($arr, $i, $end);
    
        return $i;
    }
    
    private static function quicksort(array &$arr, int $start, int $end) {
        if ($start >= $end) {
            return;
        }
    
        $pivotIndex = self::partition($arr, $start, $end);
    
        self::quicksort($arr, $start, $pivotIndex - 1);
        self::quicksort($arr, $pivotIndex + 1, $end);
    }
    
    public static function sort(array &$arr) {
        if (empty($arr)) {
            return;
        }
    
        self::quicksort($arr, 0, sizeof($arr) - 1);
    }
}


/**
 * Init
 */

$input = [15, 5, 9, 10, 29, 1, 4, 22, 30, 2, 3];

QuickSort::sort($input);

print_r($input);