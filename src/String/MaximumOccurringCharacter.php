<?php

namespace DsAlgorithms\String;

class MaximumOccurringCharacter
{
    public function __invoke($word)
    {
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

// $maximumOccurringCharacter = new MaximumOccurringCharacter;

// echo $maximumOccurringCharacter('abbbaacc') . PHP_EOL; // a
// echo $maximumOccurringCharacter('helloworld') . PHP_EOL; // l
// echo $maximumOccurringCharacter('abcdefghikjkakjiuiu') . PHP_EOL; // i
// echo $maximumOccurringCharacter('0a0000bcdefghikjkakjiuiu') . PHP_EOL; // 0
// echo $maximumOccurringCharacter('Z0a0ZZZZ000bcdefghikjkakjiuiu') . PHP_EOL; // 0
