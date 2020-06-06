<?php

namespace DsAlgorithms\String;

function swap(&$word, $i, $j)
{
    $aux = $word[$j];

    $word[$j] = $word[$i];
    $word[$i] = $aux;
}

function permute($word)
{

    echo $word . PHP_EOL;

    $length = strlen($word);

    for ($i = 0; $i < $length; $i++) {
        if (($i + 1) >= $length) {
            return;
        }

        swap($word, $i, $i + 1);
    }
}

/**
 * Init
 */
$input = $argv[1] ?? 'dia';

permute($input);
