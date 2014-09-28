<?php namespace PhilipBrown\Math\Command;

use PhilipBrown\Math\Number;

abstract class AbstractCommand
{
    /**
     * Ensure the value is an instance of Number
     *
     * @param $number integer
     * @return PhilipBrown\Math\Number
     */
    public function isNumber($number)
    {
        if($number instanceof Number) {
            return $number;
        }

        return new Number($number);
    }
}
