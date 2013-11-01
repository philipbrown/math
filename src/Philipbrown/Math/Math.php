<?php namespace Philipbrown\Math;

class Math {

  public function add($a, $b, $scale = 0)
  {
    return bcadd($a, $b, $scale);
  }

}
