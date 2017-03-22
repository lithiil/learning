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

    if ($num % 2 == 0) {

    while ($tmpNum != 1) {

            $divisor = intval(round($tmpNum / 2));
            array_push($divisors, $divisor);
            $tmpNum = $divisor;
            echo $divisor . PHP_EOL;

    }

    } else die("The number is not perfect!");

    if (array_sum($divisors) == $num) {
        echo "The number is perfect".PHP_EOL;
    } else {
        echo "The number is not perfect".PHP_EOL;
    }
}

perfectNumbers($num);