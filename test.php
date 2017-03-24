<?php
/**
 * Created by PhpStorm.
 * User: tudorpalade
 * Date: 3/24/17
 * Time: 8:44 AM
 */
include_once ('numAnalyzer.php');

$analyzer = new numAnalyzer();
$num = $argv[1];

$time_start = microtime(true);

$highestPossibleDivisors = $num/2;

$divisors = [];

$analyzer->findDivisors($num,$highestPossibleDivisors);
$analyzer->isPrime($num,$highestPossibleDivisors);
$analyzer->perfectNumbers($num,$highestPossibleDivisors);
$analyzer->isPerfectSquare($num,$highestPossibleDivisors);
$analyzer->isPerfectCube($num,$highestPossibleDivisors);
$analyzer->findOnes($num);

$time_end = microtime(true);
$time = $time_end - $time_start;

echo "\e[34m"." Calculated in ".intval(round($time))." Seconds"."\e[0m".PHP_EOL;