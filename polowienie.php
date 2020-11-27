<?php
function Cos_func($x, $multiplier){
//    cos(x) = x;
//    f(x) = cos(x) - x

    return cos($multiplier * $x) - $x;
}


function Bisection_Method2($a, $b, $i, $epsilon){

    if(Cos_func($a, $i) == 0){
            return $a;
    }
    if(Cos_func($b, $i) == 0){
            return $b;
    }
    while ($b - $a > $epsilon) {
        $middle = ($a + $b) / 2;
        if (Cos_func($middle, $i) == 0) {
                return $middle;
        }
        if (Cos_func($a, $i) * Cos_func($middle, $i) < 0) {
            $b = $middle;
        } else {
            $a = $middle;
        }
    }
    return (($a + $b) / 2);

}
function Operate_Bisection($b, $epsilon, $size){
    $result = $b;
    $a = 0;

    for($i = 1; $i <=$size; $i++){
        $result = Bisection_Method2($a, $b, $i, $epsilon);
        $b = $result;
    }
    return $result;
}
//$epsilon = 0.0000000000000001;
$epsilon = 0.0001;
//$size = 100000000;
$size = 10;
$b = M_PI;
$result = Operate_Bisection($b, $epsilon, $size);
echo "\nMiejsce zerowe dla i = ".$size." to: " . $result . "\n \n";

//kazda funkcja mnozona przez x-a ma msc 0 w a

//$maxB = 9007199254740991;
//$minA = $maxB * -1;
//
//$a  = -100;
//$b = 100;
//$epsilon = 0.000000000000000001;
////$result =  Compartment_Hunting_Method($a, $b, $epsilon);
//$result =  Compartment_Hunting_Method($minA, $maxB, $epsilon);
//$rounded_result = number_format((float) $result, 3, '.', '');
//
//echo "a = ".$a." b = ".$b." epsilon = ".$epsilon."Zero in function f(x) = x^3 - 3x^2 + 2x - 6 = ".$result."\n";
//echo "Rounded zero in function f(x) = x^3 - 3x^2 + 2x - 6 = ".$rounded_result;

//algorytm jest bardzo efektywny - 20 krokow jedna  dwudziewsta.
//    w petli go puscimy zeby wiecej razy go policzyc

//rozwiazanie rownania
//mamy funkcje np cos i ma miejsce zerowe (wartosc x dla ktorej jest 0)
//    f(x) = 0
//1. bierzemy dowolny przedzial i sprawdzamy czy mamy miejsce zerowe
//biore konce przedzialow x11 i x12
//2. Metoda polowienia przedzialow dobieram granice przedzialow
//3. wyznaczam polowe i jest to xtmp w 2 kroku

//na rownanie cos(x) = x nie mamy metody i przeksztalcam na nowa funkcje cos(x) - x
//polowienie przedzialow dla cosnx = x

//a to bedzie zawsze 0, b to bedzie poprzednie miejsce zerowe
