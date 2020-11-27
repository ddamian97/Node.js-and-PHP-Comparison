<?php
function reducer($accumulator, $current_value){
    $accumulator += $current_value;
    return $accumulator;
}
function fill_the_array($number){
    $range = $number;
//    argument funkcji to mój zakres

    $new_array =  array_fill(0, $range, 0);
//    tworzę nową tablicę o rozmiarze $range i wypełniam ją zerami

    $random_number = 0;
//    tworzę zmienną do losowych liczb

    for($i = 1; $i <= $range; $i++){
        do{
            $random_number = rand(1, $range);
//            echo 'exists: '.$random_number."\n";
//            w pętli dla liczb w zakresie 1 do $range losuje za pomocą rand liczbe
// z tego samego zakresu dopóki się powtarza w tablicy

        }
        while(in_array($random_number, $new_array));
//        sprawdzam czy w tablicy jest element z tą wartością

        $new_array[$i] = $random_number;
//        jeżeli go nie ma to wrzucam do tablicy
    }
    return $new_array;
}

//przekazuję parametr przy odpalaniu kodu i pobieram go z argv[1]
if(isset($argv[1])){
    $range = $argv[1];
    echo "Range: ".$range."\n";

    $array = fill_the_array($range);
//    uruchamiam funkcje do uzupelniania tablicy z parametrem $range i przypisuje zwracaną tablice do $array;

    $string=implode(", ",$array);
//    do $string przypisuje nasza tablice z wartosciami oddzielonymi przecinkiem

    echo("[".$string."]"."\n");
//    wypisuje sformatowaną tablcie

    $array_sum = array_reduce($array, "reducer");
//    uruchamiam funkcje array_reduce z tablica i nazwa funkcji 'reducer', ktora sumuje wartosci w trablicy

    echo $array_sum;
}else{
    echo "No arguments!";
}

//od kilku sekund do kilkunastu minut
