<?php
/**
 * Created by PhpStorm.
 * User: lithiil
 * Date: 23.03.2017
 * Time: 20:56
 */

$num = $argv[1];

function isPrime($num) {

    $numberOfDivisors = 0;

    if ($num <= 1 || is_float($num) === false) {
        echo "The number cannot be Prime, it has to be greater than 1 and whole".PHP_EOL;
        return;
    }

    $highestPossibleDivisor = intval($num / 2);

    for ($i = 2; $i <= $highestPossibleDivisor; $i++) {
        if ($num % $i == 0) {
            $numberOfDivisors ++;
            break;
        }
    }
    if ($numberOfDivisors == 0) {
        echo "The number is prime".PHP_EOL;
    } else {
        echo "Number is not prime, it is dividable by $i".PHP_EOL;

    }
}

isPrime($num);