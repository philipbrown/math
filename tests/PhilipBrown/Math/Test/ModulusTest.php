<?php namespace PhilipBrown\Math\Test;

class ModulusTest extends TestCase {

  public function testAdd()
  {
    $this->assertEquals(0, $this->m()->modulus(4, 2)->getValue());
    $this->assertEquals(2, $this->m(1)->modulus(2, 4)->getValue());
    $this->assertEquals(0, $this->m(2)->modulus(4.44, 2.22)->getValue());
    $this->assertEquals(1, $this->m(4)->modulus(10, 3)->getValue());
    $this->assertEquals(34, $this->m(4)->modulus(242342.4532, 44.6643)->getValue());
  }

}
