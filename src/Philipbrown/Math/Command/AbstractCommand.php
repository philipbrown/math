<?php namespace Philipbrown\Math\Command;

use Philipbrown\Math\Number;

abstract class AbstractCommand {

  /**
   * Is Number
   *
   * @param $number string
   * @return bool
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
