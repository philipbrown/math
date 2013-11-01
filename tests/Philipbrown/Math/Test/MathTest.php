<?php namespace Philipbrown\Math\Test;


class MathTest extends TestCase {

  public function testAdd()
  {
    $this->assertEquals('4', $this->m->add(2,2));
    $this->assertEquals('6', $this->m->add(3.3,3.3));
    $this->assertEquals('6.7', $this->m->add(3.3,3.4, 1));
    $this->assertEquals('3.634', $this->m->add(1.234,2.4,3));
    $this->assertEquals('13.32317', $this->m->add(9.76853, 3.55464, 5));
  }

  public function testSubtract()
  {
    $this->assertEquals('2', $this->m->subtract(4, 2));
    $this->assertEquals('2', $this->m->subtract(4.2, 2));
    $this->assertEquals('9.9', $this->m->subtract(12, 2.1, 1));
    $this->assertEquals('10.123', $this->m->subtract(15, 4.877, 3));
    $this->assertEquals('10', $this->m->subtract(20.34567, 10.34567, 5));
  }

  public function testMultiply()
  {
    $this->assertEquals('36', $this->m->multiply(6, 6));
    $this->assertEquals('52.92', $this->m->multiply(5.4, 9.8, 2));
    $this->assertEquals('1123.8656', $this->m->multiply(24.56, 45.76, 4));
    $this->assertEquals('2164.554496', $this->m->multiply(65.864, 32.864, 6));
    $this->assertEquals('1139.79624552', $this->m->multiply(34.7643, 32.7864, 12));
  }

  public function testDivide()
  {
    $this->assertEquals('7', $this->m->divide(49, 7));
    $this->assertEquals('3.1', $this->m->divide(9.3, 3, 1));
    $this->assertEquals('3.33', $this->m->divide(10, 3, 2));
    $this->assertEquals('3.333', $this->m->divide(10, 3, 3));
    $this->assertEquals('3.3333', $this->m->divide(10, 3, 4));
  }

  public function testModulus()
  {
    $this->assertEquals('0', $this->m->modulus(4, 2));
    $this->assertEquals('2', $this->m->modulus(2, 4));
    $this->assertEquals('1', $this->m->modulus(10, 3));
    $this->assertEquals('2', $this->m->modulus(20, 3));
    $this->assertEquals('1', $this->m->modulus(15, 2));
  }

  public function testSquareRoot()
  {
    $this->assertEquals('7', $this->m->squareRoot(49));
    $this->assertEquals('4.8989794', $this->m->squareRoot(24, 7));
    $this->assertEquals('5.916', $this->m->squareRoot(35, 3));
    $this->assertEquals('7.48331', $this->m->squareRoot(56, 5));
    $this->assertEquals('67.490740', $this->m->squareRoot(4555, 6));
  }

  public function testCompare()
  {
    $this->assertEquals(0, $this->m->compare(23, 23));
    $this->assertEquals(1, $this->m->compare(23.45, 23.23, 2));
    $this->assertEquals(1, $this->m->compare(123.123, 123.122, 3));
    $this->assertEquals(-1, $this->m->compare(99.98, 99.99, 2));
    $this->assertEquals(-1, $this->m->compare(33.44, 35));
  }

  public function testPower()
  {
    $this->assertEquals('74.08', $this->m->power('4.2', '3', 2));
    $this->assertEquals('39.304', $this->m->power('3.4', '3', 3));
    $this->assertEquals('10262796.6736', $this->m->power('56.6', '4', 4));
    $this->assertEquals('75.258349', $this->m->power('4.222', '3', 6));
    $this->assertEquals('2050702882069.856', $this->m->power('23.334', '9', 3));
  }

}
