<?php namespace Philipbrown\Math\Test;

use PHPUnit_Framework_TestCase;
use Philipbrown\Math\Math;

class TestCase extends PHPUnit_Framework_TestCase {

  public function m($scale = 0)
  {
    $m = new Math;
    $m->setScale(0);
    return $m;
  }

}
