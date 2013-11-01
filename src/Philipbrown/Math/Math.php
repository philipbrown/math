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

  /**
   * Divide
   *
   * @param string $a
   * @param string $a
   * @param integer $scale
   * @return string
   */
  public function divide($a, $b, $scale = 0)
  {
    return bcdiv($a, $b, $scale);
  }

  /**
   * Modulus
   *
   * @param string $a
   * @param string $a
   * @return string
   */
  public function modulus($a, $b)
  {
    return bcmod($a, $b);
  }

  /**
   * Square Root
   *
   * @param string $a
   * @param integer $scale
   * @return string
   */
  public function squareRoot($a, $scale = 0)
  {
    return bcsqrt($a, $scale);
  }

  /**
   * Compare
   *
   * @param string $a
   * @param string $b
   * @param integer $scale
   * @return string
   */
  public function compare($a, $b, $scale = 0)
  {
    return bccomp($a, $b, $scale);
  }

  /**
   * Power
   *
   * @param string $a
   * @param string $b
   * @param integer $scale
   * @return string
   */
  public function power($a, $b, $scale =0)
  {
    return bcpow($a, $b, $scale);
  }

}
