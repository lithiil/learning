<?php
/**
 * Created by PhpStorm.
 * User: tudorpalade
 * Date: 3/22/17
 * Time: 1:03 PM
 */

function mySpecialCount($num = PHP_INT_MAX) {

    echo "Wait while the hamsters count and analyze every number until ".PHP_INT_MAX." ".PHP_EOL;
    $countOnes = 0;
    $currNum = 0;
    $numsFound = 0;
    $time_start = microtime(true);

    for ($i = 0; $i < $num; $i++) {
        $currNum++;
        $tmpCurrNum = $currNum;
        while ($tmpCurrNum != 0) {
            $lastDigit = $tmpCurrNum%10;
            if ($lastDigit == 1) {
                $countOnes++;
            }
            $tmpCurrNum = intval($tmpCurrNum/10);
        }

        $time_end = microtime(true);
        $time = $time_end - $time_start;

        if ($currNum == $countOnes) {
            $numsFound++;
            echo "SUCCESS!!! Number ".$currNum." has ".$countOnes. " ones in it!!!"."Result number: ".$numsFound." Calculated in ".intval($time)." Seconds".PHP_EOL;
        }
    }
    echo "Hamsters finishes the job".PHP_EOL;
}

mySpecialCount();