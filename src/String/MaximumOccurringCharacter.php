<?php

namespace DsAlgorithms\String;

class MaximumOccurringCharacter
{
    public static function max($word)
    {
        if (empty($word)) {
            return;
        }

        $chars = [];
        $bigger = 0;
        $maxOcuChar = null;
       
        for ($i = 0; $i < \strlen($word); $i++) {
            $char = $word[$i];

            if (isset($chars[$char])) {
                $chars[$char]++;
            } else {
                $chars[$char] = 1;
            }

            if ($chars[$char] >= $bigger) {
                $bigger = $chars[$char];
                $maxOcuChar = $char;
            }
        }

        return $maxOcuChar;
    }
}
