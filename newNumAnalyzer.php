<?php

/**
 * Created by PhpStorm.
 * User: lithiil
 * Date: 28.03.2017
 * Time: 23:58
 */
class newNumAnalyzer
{
    function findDivisors($num,$divisors) {

        $stringArray = implode(',',$divisors);

        echo "\e[32m".$num."`s divisors are: ".$stringArray."\e[0m".PHP_EOL;
    }

    function perfectNumbers($num,$divisors) {

        $sumOfDivisors = array_sum($divisors);

        if($sumOfDivisors == $num) {
            echo "\e[32mThe number is perfect "."\e[0m".PHP_EOL;
        } else {
            echo "\e[32mThe number is not perfect ! The Sum of the divisors is: ".($sumOfDivisors+$num)."\e[0m".PHP_EOL;
        }

    }

    function isPrime($num,$divisors) {

        $numberOfDivisors = count($divisors);

        if (is_float($num) === true) {
            echo "\e[32mThe number is not whole, it cannot be prime\e[0m".PHP_EOL;
            return;
        }
        if ($num <= 1) {
            echo "\e[32mThe number cannot be Prime, it has to be greater than 1\e[0m".PHP_EOL;
            return;
        }

        if ($numberOfDivisors == 0) {
            echo "\e[32mThe number is prime\e[0m".PHP_EOL;
        } else {
            echo "\e[32mNumber is not prime\e[0m".PHP_EOL;

        }
    }

    function isPerfectSquare($num,$highestPossibleDivisor,$divisors) {

        if ($highestPossibleDivisor <= 1) {
            echo "\e[32mThe number is not a perfect square\e[0m".PHP_EOL;
        }

        foreach ($divisors as $divisor) {
            $result = pow($divisor,2);
            if ($result == $num) {
                echo "\e[32mThe number is a perfect square because it is equal to ".$divisor." * ".$divisor."\e[0m".PHP_EOL;
                break;
            } else {
                echo "\e[32mThe number is not a perfect square\e[0m".PHP_EOL;
                break;
            }
        }

    }

    function isPerfectCube($num,$highestPossibleDivisor,$divisors) {

        if ($highestPossibleDivisor <= 1) {
            echo "\e[32mThe number is not a perfect square\e[0m".PHP_EOL;
        }

        foreach ($divisors as $divisor) {
            $result = pow($divisor,3);
            if ($result == $num) {
                echo "\e[32mThe number is a perfect cube because it is equal to ".$divisor." * ".$divisor." * ".$divisor."\e[0m".PHP_EOL;
                return;
            } else {
                echo "\e[32mThe number is not a perfect cube\e[0m".PHP_EOL;
                return;
            }
        }
    }

    function findOnes($num) {
        $oneCount= 0;


        while ($num != 0) {
            $lastNum = $num%10;

            if ($lastNum == 1) {
                $oneCount++;
            }

            $num= intval($num/10);
        }

        echo "\e[32mThe number of ones in the number is: $oneCount"."\033[0m".PHP_EOL;
    }

}