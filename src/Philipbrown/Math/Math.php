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

}
