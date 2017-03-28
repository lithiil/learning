<?php
/**
 * Created by PhpStorm.
 * User: lithiil
 * Date: 28.03.2017
 * Time: 23:56
 */

include_once ('newNumAnalyzer.php');

$analyzer = new newNumAnalyzer();
$num = $argv[1];

$time_start = microtime(true);

$highestPossibleDivisor = $num/2;

$divisors = [];

for ($i = 1; $i <= $highestPossibleDivisor; $i++) {
    if ($num % $i == 0) {
        array_push($divisors,$i);
    }
}

$analyzer->findDivisors($num,$divisors);
$analyzer->isPrime($num,$divisors);
$analyzer->perfectNumbers($num,$divisors);
$analyzer->isPerfectSquare($num,$highestPossibleDivisor,$divisors);
$analyzer->isPerfectCube($num,$highestPossibleDivisor,$divisors);
$analyzer->findOnes($num);

$time_end = microtime(true);
$time = $time_end - $time_start;

echo "\e[34m"." Calculated in ".intval(round($time))." Seconds"."\e[0m".PHP_EOL;