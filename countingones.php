<?php
/**
 * Created by PhpStorm.
 * User: tudorpalade
 * Date: 3/22/17
 * Time: 10:47 AM
 */

$num = $argv[1];
/**
 * @param $num
 */
function findOnes($num) {
    echo "The number is $num".PHP_EOL;
    $oneCount= 0;
    $time_start = microtime(true);

    while ($num != 0) {
        $lastNum = $num%10;

        if ($lastNum == 1) {
            $oneCount++;
        }

       $num= intval($num/10);
    }

    $time_end = microtime(true);
    $time = $time_end - $time_start;

    echo "The number of ones in the number is: $oneCount"." Calculated in ".intval($time)." Seconds".PHP_EOL;
}

findOnes($num);