<?php namespace PhilipBrown\Math;

class PositiveNumber extends Number {

  /**
   * Check to see if the number is valid
   *
   * @param string $number
   * @return bool
   */
  public function isValid($number)
  {
    return (boolean) preg_match('/^\d+$/', $number);
  }

}
