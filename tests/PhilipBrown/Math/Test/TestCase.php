<?php namespace PhilipBrown\Math\Test;

use PHPUnit_Framework_TestCase;
use PhilipBrown\Math\Math;

class TestCase extends PHPUnit_Framework_TestCase {

  public function m($scale = 0)
  {
    $m = new Math;
    $m->setScale($scale);
    return $m;
  }

}
