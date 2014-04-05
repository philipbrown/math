<?php namespace Philipbrown\Math\Command;

use Philipbrown\Math\Number;

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
