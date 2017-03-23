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

    for ($i = 1; $i <= $num; $i++) {
        if ($tmpNum % $i == 0) {
            array_push($divisors,$i);
        }
    }

    if(array_sum($divisors) / 2 == $num) {
        echo "The number is perfect".PHP_EOL;
    } else {
        echo "The number is not perfect".PHP_EOL;
    }

}

perfectNumbers($num);