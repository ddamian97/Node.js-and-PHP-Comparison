<?php
function run_the_code(){
//    $values = [10, 20, 50, 100, 200, 500, 1000, 2000, 5000, 10000, 20000, 50000, 100000, 200000, 500000];
    $values = [10, 20, 50, 100, 200, 500, 1000];
//    $values = [1, 1000];

    foreach ($values as $value){
        $string = 'time php fill_the_array.php ';
        $to_file = ' >> php_time.txt';
        //        $to_file = '';

//        tutaj opcja zapisu wynikow do pliku
        $output = shell_exec($string.$value.$to_file);
//        uruchamiam skrypt z piku o nazwie $string z parametrem $value  w terminalu, zapisuje output do pliku o nazwie $to_file
//  i wynik w formie stringa przypisuje do $output
        echo $output;
    }
}
run_the_code();

