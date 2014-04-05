<?php namespace Philipbrown\Math;

class PositiveNumber extends Number {

  /**
   * Is Valid
   *
   * @param string $number
   * @return bool
   */
  public function isValid($number)
  {
    return (boolean) preg_match('/^\d+$/', $number);
  }

}
