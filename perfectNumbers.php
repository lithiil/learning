<?php
/**
 * Created by PhpStorm.
 * User: tudorpalade
 * Date: 3/22/17
 * Time: 3:26 PM
 */

$num = $argv[1];



function perfectNumbers($num) {
    $time_start = microtime(true);

    $divisors = [];
    $tmpNum = $num;

    for ($i = 1; $i < $num; $i++) {
        if ($tmpNum % $i == 0) {
            array_push($divisors,$i);
        }
    }

    $time_end = microtime(true);
    $time = $time_end - $time_start;

    if(array_sum($divisors) == $num) {
        echo "The number is perfect "."Calculated in ".intval(round($time))." seconds".PHP_EOL;
    } else {
        echo "The number is not perfect"."Calculated in ".intval(round($time))." seconds".PHP_EOL;
    }

}



perfectNumbers($num);