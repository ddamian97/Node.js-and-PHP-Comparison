<?php
//https://stackoverflow.com/questions/3686177/php-to-search-within-txt-file-and-echo-the-whole-line

function find_the_word($word, $file_name){
//    preg_match_all("(".preg_quote($word).".*?".preg_quote($word).")s",$file_name,$matches);
//    var_dump($matches[0]);
    $file_contents = file_get_contents($file_name);
//    cz`y plik zczytuje z dysku czy wpisuje do ramu
//    caly plik do stringa

    $word = '/'.$word.'/';
//    do mojego slowa dodaje delimiter '/'
    if (preg_match_all($word, $file_contents, $matches)) {
        echo count($matches[0]) . " matches found";
//        zliczam do tablicy
//        var_dump($matches);
    }else {
        echo "match NOT found";
    }
}

$word = "Odrośl";
$file_name = 'biblia-tysiaclecia.txt';
echo find_the_word($word, $file_name)."\n";

//    dokładnie opisać co ten algorytm robi

//zwiększ rozmiar pliku biblia -> 40MB
