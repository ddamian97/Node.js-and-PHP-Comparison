<?php
function run_the_code(){
//    $values = [10, 20, 50, 100, 200, 500, 1000, 2000, 5000, 10000, 20000, 50000, 100000, 200000, 500000];
    $values = [10, 20, 50, 100, 200, 500, 1000];
//    $values = [1, 1000];

    foreach ($values as &$value){
        $string = 'time node fill_the_array.js ';
        $to_file = ' >> js_time.txt';
//        $to_file = '';
        $output = shell_exec($string.$value.$to_file);
        echo $output;
    }
}
run_the_code();

