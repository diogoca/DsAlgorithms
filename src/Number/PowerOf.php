<?php

namespace DsAlgorithms\Number;

class PowerOf
{
    public static function powerIterative($power, $exponent)
    {
        if ($exponent == 1) {
            return $power;
        }
        
        $base = $power;

        for ($i = 1; $i < $exponent; $i++) {
            $power *= $base;
        }

        return $power;
    }

    private static function powerRecursive($power, $base, $exponent, $i)
    {
        if ($i >= $exponent) {
            return $power;
        }

        return self::powerRecursive($power * $base, $base, $exponent, $i + 1);
    }

    public static function power($power, $exponent)
    {
        if ($exponent == 1) {
            return $power;
        }

        return self::powerRecursive($power, $power, $exponent, 1);
    }
}

// $start = microtime(true);

// var_dump(PowerOf::powerIterative(2, 8)); # 256

// echo 'Iterative execution time ', microtime(true) - $start . PHP_EOL;

// $start = microtime(true);

// var_dump(PowerOf::power(2, 8));

// echo 'Recursive execution time ', microtime(true) - $start . PHP_EOL;
