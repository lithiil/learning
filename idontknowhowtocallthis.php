<?php
/**
 * Created by PhpStorm.
 * User: tudorpalade
 * Date: 3/22/17
 * Time: 1:03 PM
 */

function mySpecialCount($num = PHP_INT_MAX) {

    echo "Wait while the hamsters count...".PHP_EOL;
    $countOnes = 0;
    $currNum = 0;
    $numList = [];

    for ($i = 0; $i < $num; $i++) {
        $currNum++;
        $tmpCurrNum = $currNum;
        while ($tmpCurrNum != 0) {
            $lastDigit = $tmpCurrNum%10;
            if ($lastDigit == 1) {
                $countOnes++;
            }
            $tmpCurrNum = $tmpCurrNum/10;
        }
        if ($currNum == $countOnes) {
            array_push($numList,$currNum);
        }
        $countOnes = 0;
        echo "We are at number: ".$currNum.PHP_EOL;
    }
    echo "Hamsters finishes the job".PHP_EOL;
    print_r("The numbers are: ".PHP_EOL.$numList);
}

mySpecialCount();