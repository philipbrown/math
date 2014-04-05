<?php namespace PhilipBrown\Math\Test;

class MultiplyTest extends TestCase {

  public function testAdd()
  {
    $this->assertEquals(8, $this->m()->multiply(4, 2)->getValue());
    $this->assertEquals(9.4, $this->m(1)->multiply(4.3, 2.2)->getValue());
    $this->assertEquals(9.46, $this->m(2)->multiply(4.3, 2.2)->getValue());
    $this->assertEquals(11.748, $this->m(3)->multiply(5.34, 2.2)->getValue());
    $this->assertEquals(11.9616, $this->m(4)->multiply(5.34, 2.24)->getValue());
  }

}
