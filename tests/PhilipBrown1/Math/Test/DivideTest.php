<?php namespace Philipbrown\Math\Test;

class DivideTest extends TestCase {

  public function testDivide()
  {
    $this->assertEquals(5, $this->m()->divide(10, 2)->getValue());
    $this->assertEquals(7.1, $this->m(1)->divide(14.2, 2)->getValue());
    $this->assertEquals(8.22, $this->m(2)->divide(16.44, 2)->getValue());
    $this->assertEquals(7.111, $this->m(3)->divide(21.333, 3)->getValue());
    $this->assertEquals(4.6789, $this->m(4)->divide(23.3945, 5)->getValue());
    $this->assertEquals(6.86432, $this->m(5)->divide(54.91456, 8)->getValue());
  }

}
