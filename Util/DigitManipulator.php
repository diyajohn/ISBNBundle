<?php

namespace TestDemo\ISBNBundle\Util;

final class DigitManipulator
{
    /**
     * Function that returns the sum of all the ten digits, each multiplied by its (integer) weight (10 to 1 or 2)
     * @param $number
     * @return int
     */
    public static function getMultipliedSum($number)
    {
        $sum = 0;
        $j = 10;

        for($i = 0; $i < strlen($number); $i++)
        {
            $char = ($number[$i] == 'X') ? 10 : $number[$i];
            $sum += $char*$j;
            $j--;
        }
        return $sum;
    }

    public static function customMod($dividend, $divisor = 11 )
    {
        $remainder = $dividend % $divisor;
        return ($remainder == 10) ? 'X' : $remainder;
    }
}