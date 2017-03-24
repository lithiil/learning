<?php

/**
 * Created by PhpStorm.
 * User: tudorpalade
 * Date: 3/24/17
 * Time: 8:41 AM
 */
class numAnalyzer
{

    function findDivisors($num,$highestPossibleDivisor) {

        $divisors = [];
        for ($i = 1; $i <= $highestPossibleDivisor; $i++) {
            if ($num % $i == 0) {
                array_push($divisors,$i);
            }
        }

        $stringArray = implode(' ',$divisors);

        echo "\e[32m".$num."`s divisors are: ".$stringArray."\e[0m".PHP_EOL;
    }

    function perfectNumbers($num,$highestPossibleDivisor) {

        $tmpNum = $num;
        $sumOfDivisors = 0;

        for ($i = 1; $i <= $highestPossibleDivisor; $i++) {
            if ($tmpNum % $i == 0) {
                $sumOfDivisors += $i;
            }
        }

        if($sumOfDivisors == $num) {
            echo "\e[32mThe number is perfect "."\e[0m".PHP_EOL;
        } else {
            echo "\e[32mThe number is not perfect ! The Sum of the divisors is: ".($sumOfDivisors+$num)."\e[0m".PHP_EOL;
        }

    }

    function isPrime($num,$highestPossibleDivisor) {

        $numberOfDivisors = 0;

        if (is_float($num) === true) {
            echo "\e[32mThe number is not whole, it cannot be prime\e[0m".PHP_EOL;
            return;
        }
        if ($num <= 1) {
            echo "\e[32mThe number cannot be Prime, it has to be greater than 1\e[0m".PHP_EOL;
            return;
        }

        for ($i = 2; $i <= $highestPossibleDivisor; $i++) {
            if ($num % $i == 0) {
                $numberOfDivisors ++;
                break;
            }
        }
        if ($numberOfDivisors == 0) {
            echo "\e[32mThe number is prime\e[0m".PHP_EOL;
        } else {
            echo "\e[32mNumber is not prime, it is dividable by $i\e[0m".PHP_EOL;

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

    function isPerfectSquare($num,$highestPossibleDivisor) {

        if ($highestPossibleDivisor <= 1) {
            echo "\e[32mThe number is not a perfect square\e[0m".PHP_EOL;
        }

        for ($i = 2; $i <= $highestPossibleDivisor; $i++) {
            if ($i * $i == $num) {
                echo "\e[32mThe number is a perfect square because it is equal to ".$i." * ".$i."\e[0m".PHP_EOL;
                break;
            } else {
                echo "\e[32mThe number is not a perfect square\e[0m".PHP_EOL;
                break;
            }
        }

    }

    function isPerfectCube($num,$highestPossibleDivisor) {

        if ($highestPossibleDivisor <= 1) {
            echo "\e[32mThe number is not a perfect square\e[0m".PHP_EOL;
        }

        for ($i = 2; $i <= $highestPossibleDivisor; $i++) {
            if ($i * $i * $i == $num) {
                echo "\e[32mThe number is a perfect cube because it is equal to ".$i." * ".$i." * ".$i."\e[0m".PHP_EOL;
                break;
            } else {
                echo "\e[32mThe number is not a perfect cube\e[0m".PHP_EOL;
                break;
            }
        }
    }

}