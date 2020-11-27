<?php
ini_set('memory_limit', '-1');
//bez tego nie moge otworzyc duzych plikow

//Allowed memory size of 134217728 bytes exhausted (tried to allocate 4096 bytes)

function count_the_lines($name) {
    $file_name = $name;
    $number_of_lines = count(file($file_name));
    return $number_of_lines;
}

echo count_the_lines('biblia-tysiaclecia.txt');
