<?php

namespace DsAlgorithms\String;

class ReverseString
{
    private static function recursiveReverse($word, $i)
    {
        if ($i < 0) {
            return;
        }

        return $word[$i] . self::recursiveReverse($word, --$i);
    }

    public static function reverse($word)
    {
        if (empty($word)) {
            return;
        }

        return self::recursiveReverse($word, strlen($word) - 1);
    }
}
