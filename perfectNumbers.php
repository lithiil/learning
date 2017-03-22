<?php
/**
 * Created by PhpStorm.
 * User: tudorpalade
 * Date: 3/22/17
 * Time: 3:26 PM
 */

$num = $argv[1];

function perfectNumbers($num) {
    $divisors = [];
    $tmpNum = $num;

    while ($tmpNum != 1) {

         if (is_int($tmpNum % 2)) {
             $divisor = intval(round($tmpNum/2));
             array_push($divisors,$divisor);
             $tmpNum = $divisor;
             echo $divisor.PHP_EOL;
        } else break;

    }
    if (array_sum($divisors) == $num) {
        echo "The number is perfect".PHP_EOL;
    } else {
        echo "The number is not perfect".PHP_EOL;
    }
}

perfectNumbers($num);