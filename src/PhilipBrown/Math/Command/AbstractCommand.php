<?php namespace PhilipBrown\Math\Command;

use PhilipBrown\Math\Number;

abstract class AbstractCommand {

  /**
   * Is Number
   *
   * @param $number integer
   * @return Math\Number
   */
  public function isNumber($number)
  {
    if($number instanceof Number)
    {
      return $number;
    }

    return new Number($number);
  }

}
