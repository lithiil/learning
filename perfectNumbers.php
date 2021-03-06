<?php
/**
 * Created by PhpStorm.
 * User: tudorpalade
 * Date: 3/22/17
 * Time: 3:26 PM
 */

$num = $argv[1];


/**
 * @param $num
 */
function perfectNumbers($num) {
    $time_start = microtime(true);

    $tmpNum = $num;
    $sumOfDivisors = 0;

    for ($i = 1; $i <= $num/2; $i++) {
        if ($tmpNum % $i == 0) {
            $sumOfDivisors += $i;
        }
    }

    $time_end = microtime(true);
    $time = $time_end - $time_start;

    if($sumOfDivisors == $num) {
        echo "The number is perfect "."Calculated in ".intval(round($time))." seconds".PHP_EOL;
    } else {
        echo "The number is not perfect "."Calculated in ".intval(round($time))." seconds".PHP_EOL;
    }

}



perfectNumbers($num);