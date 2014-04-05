<?php namespace PhilipBrown\Math\Test;

class CompareTest extends TestCase {

  public function testAdd()
  {
    $this->assertEquals(1, $this->m()->compare(2, 1)->getValue());
    $this->assertEquals(0, $this->m(1)->compare(2.22, 2.223)->getValue());
    $this->assertEquals(-1, $this->m(2)->compare(1.03, 1.04)->getValue());
    $this->assertEquals(1, $this->m(4)->compare(2.4567, 2.4566)->getValue());
    $this->assertEquals(0, $this->m(4)->compare(5.666666, 5.66666666666668)->getValue());
  }

}
