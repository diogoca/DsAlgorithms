<?php

namespace DsAlgorithms\Search;

/**
 * Sequencial Search
 * Average complexity: O(n)
 */
class SequentialSearch implements ArraySearch
{
    public static $calls = 0;

    private static function recursiveSearch(array &$arr, &$needle, int $begin, int $end)
    {
        self::$calls++;

        if ($begin > $end) {
            return null;
        }

        if ($arr[$begin] === $needle) {
            return $begin;
        }

        return self::recursiveSearch($arr, $needle, ++$begin, $end);
    }

    public static function search(array $arr, $needle)
    {
        if (empty($arr) || empty($needle)) {
            return null;
        }

        return self::recursiveSearch($arr, $needle, 0, sizeof($arr) - 1);
    }
}

/**
 * Init
 */

$input = \range(7, 14);

print_r($input);

var_dump(SequentialSearch::search($input, 14));

var_dump(SequentialSearch::$calls);
