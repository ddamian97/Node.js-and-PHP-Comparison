<?php

function sieve($limit)
{
    $bools = [];
    $primes = [];
    for ($i = 1; $i < $limit; $i++) {
        array_push($bools, true);
    }

    for ($i = 2; $i < $limit; $i++) {
        if ($bools[$i - 2]) {
            for ($j = $i * 2; $j <= $limit; $j += $i) {
                $bools[$j - 2] = false;
            }
        }
    }

    for ($p = 0; $p < count($bools); $p++) {
        if ($bools[$p]) {
            $primes[] = $p + 2;
        }
    }
    echo count($bools);

    return $primes;
}

$primes_Sieve = sieve(100000);
var_dump($primes_Sieve);
$sum = array_sum($primes_Sieve);
echo $sum;
