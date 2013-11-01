<?php namespace Philipbrown\Math;

class Math {

  /**
   * Add
   *
   * @param string $a
   * @param string $a
   * @param integer $scale
   * @return string
   */
  public function add($a, $b, $scale = 0)
  {
    return bcadd($a, $b, $scale);
  }

  /**
   * Subtract
   *
   * @param string $a
   * @param string $a
   * @param integer $scale
   * @return string
   */
  public function subtract($a, $b, $scale = 0)
  {
    return bcsub($a, $b, $scale);
  }

  /**
   * Multiply
   *
   * @param string $a
   * @param string $a
   * @param integer $scale
   * @return string
   */
  public function multiply($a, $b, $scale = 0)
  {
    return bcmul($a, $b, $scale);
  }

}
