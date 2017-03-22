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

    while ($num != 0) {
        $lastNum = $num%10;

        if ($lastNum == 1) {
            $oneCount++;
        }

       $num= intval($num/10);
    }

    echo "The number of ones in the number is: $oneCount".PHP_EOL;
}

findOnes($num);