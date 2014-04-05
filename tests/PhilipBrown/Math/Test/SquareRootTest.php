<?php namespace PhilipBrown\Math\Test;

class SquareRootTest extends TestCase {

  public function testAdd()
  {
    $this->assertEquals(1.414, $this->m(3)->squareRoot(2)->getValue());
    $this->assertEquals(7, $this->m(0)->squareRoot(49)->getValue());
    $this->assertEquals(7.528412, $this->m(6)->squareRoot(56.677)->getValue());
    $this->assertEquals(21.3122, $this->m(4)->squareRoot(454.213)->getValue());
    $this->assertEquals(5.6764622, $this->m(7)->squareRoot(32.222223344)->getValue());
  }

}
