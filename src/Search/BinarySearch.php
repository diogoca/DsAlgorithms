<?php

namespace DsAlgorithms\Search;

/**
 * Binary Search
 * Average complexity: O(log n)
 */
class BinarySearch implements ArraySearch
{
    public static $calls = 0;

    private static function recursiveSearch(array &$arr, &$needle, int $begin, int $end)
    {
        self::$calls++;

        if ($begin > $end) {
            return null;
        }

        $middleIndex = \floor(($begin + $end) / 2);

        if ($arr[$middleIndex] === $needle) {
            return $middleIndex;
        }

        if ($needle > $arr[$middleIndex]) {
            return self::recursiveSearch($arr, $needle, ++$middleIndex, $end);
        } else {
            return self::recursiveSearch($arr, $needle, $begin, --$middleIndex);
        }
    }
    
    public static function search(array $arr, $needle)
    {
        if (empty($arr) || empty($needle)) {
            return null;
        }

        self::$calls = 0;

        return self::recursiveSearch($arr, $needle, 0, sizeof($arr) - 1);
    }
}
