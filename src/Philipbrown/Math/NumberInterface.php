<?php namespace Philipbrown\Math;

interface NumberInterface {

  /**
   * Get Value
   *
   * @return string
   */
  public function getValue();

  /**
   * Is Valid
   *
   * @param string $number
   * @return bool
   */
  public function isValid($number);

}
