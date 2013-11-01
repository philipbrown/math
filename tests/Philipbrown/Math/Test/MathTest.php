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

  public function testSubtract()
  {
    $this->assertEquals('2', $this->m->subtract(4, 2));
    $this->assertEquals('2', $this->m->subtract(4.2, 2));
    $this->assertEquals('9.9', $this->m->subtract(12, 2.1, 1));
    $this->assertEquals('10.123', $this->m->subtract(15, 4.877, 3));
    $this->assertEquals('305.654457845', $this->m->subtract(423.234223242, 117.579765397, 9));
    $this->assertEquals('10', $this->m->subtract(20.34567, 10.34567, 5));
  }

}
