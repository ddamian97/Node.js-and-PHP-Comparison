<?php
function euklides($a, $b) {
    if($b != 0){
//        sprawdzam czy liczby nie są sobie równe
        $c = $a % $b;
//        c to reszta z dzielenia a przez b
        echo 'a = '.$a."\n".'b = '.$b."\n".'c = '.$c."\n";
        return euklides($b, $c);
    }
    return $a;
}

echo euklides(922337203685460, 857214)."\n";
//Aby obliczyć NWD(a,b), wykonujemy kolejno następujące kroki:
//Dzielimy z resztą liczbę a przez liczbę b
//jeżeli reszta jest równa 0, to NWD(a,b)=b
//jeżeli reszta jest różna od 0, to przypisujemy liczbie a wartość liczby b, liczbie b wartość otrzymanej reszty, a następnie wykonujemy ponownie punkt 1.
