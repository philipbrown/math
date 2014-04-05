<?php namespace PhilipBrown\Math\Test;

class SubtractTest extends TestCase {

  public function testSubtract()
  {
    $this->assertEquals(3, $this->m()->subtract(5, 2)->getValue());
    $this->assertEquals(4.2, $this->m(1)->subtract(6.3, 2.1)->getValue());
    $this->assertEquals(6.21, $this->m(2)->subtract(8.33, 2.12)->getValue());
    $this->assertEquals(8.765, $this->m(3)->subtract(10.888, 2.123)->getValue());
    $this->assertEquals(13.7652, $this->m(4)->subtract(15.8889, 2.1237)->getValue());
  }

}
