<?php

function Runnge_Kutta_4($y, $x, $dx){
    $k1 = $dx * f($x, $y);
    $k2 = $dx * f($x + $dx / 2.0,   +$y + $k1 / 2.0);
    $k3 = $dx * f($x + $dx / 2.0,   +$y + $k2 / 2.0);
    $k4 = $dx * f($x + $dx,         +$y + $k3);
//
    return $y + ($k1 + 2.0 * $k2 + 2.0 * $k3 + $k4) / 6.0;
//    return actual($y, $x);

}

function f($x, $y){
    return $x * sqrt($y);
}

function actual($x){
    return (1/16) * ($x*$x+4)*($x*$x+4);

}


$y = 1.0;
$x = 0.0;
$step = 0.1;
$steps = 0;
//$maxSteps = 101;
$maxSteps = 100001;
$sampleEveryN = 1;


while ($steps < $maxSteps) {
if ($steps%$sampleEveryN === 0) {
echo("y(" . $x . ") =  \t" . $y . "\t ± " .exp(actual($x) - $y));
echo("\n");
}

$y = Runnge_Kutta_4($y, $x, $step);

// using integer math for the step addition
// to prevent floating point errors as 0.2 + 0.1 != 0.3
$x = (($x * 10) + ($step * 10)) / 10;
$steps += 1;
}

//pochodna pierwszego rzedu, v z rownania newtona, albo rownanie rozpadu promieniotworczego
