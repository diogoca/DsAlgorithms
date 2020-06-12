<?php

// TODO

namespace DsAlgorithms\String;

function swap(&$word, $i, $j)
{
    $aux = $word[$j];

    $word[$j] = $word[$i];
    $word[$i] = $aux;
}

function recursivePermute($word, $f, $u)
{
    if ($u === 0) {
        return $word;
    }
    
    for ($i = $f; $i <= $u; $i++) {
        swap($word, $i, $u);
        echo $word . PHP_EOL;
        swap($word, $u, $i);
    }
}

function permute($word)
{
    recursivePermute($word, 0, strlen($word) - 1);
}

permute('abc');


// 1 com 2
// 2 com 2
