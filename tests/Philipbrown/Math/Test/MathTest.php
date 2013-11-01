<?php namespace Philipbrown\Math\Test;


class MathTest extends TestCase {

  public function testAdd()
  {
    $this->assertEquals('4', $this->m->add(2,2));
    $this->assertEquals('6', $this->m->add(3.3,3.3));
    $this->assertEquals('6.7', $this->m->add(3.3,3.4, 1));
    $this->assertEquals('3.634', $this->m->add(1.234,2.4,3));
    $this->assertEquals('11', $this->m->add(9.9999999999999999999999999999999999, 1));
    $this->assertEquals('13.32317', $this->m->add(9.76853, 3.55464, 5));
  }

}
