<?php

use PhilipBrown\Math\Math;

class MathTest extends PHPUnit_Framework_TestCase {

  public function m($scale = 0)
  {
    $m = new Math;
    $m->setScale($scale);
    return $m;
  }

  public function testSetScale()
  {
    $this->assertInstanceOf('PhilipBrown\Math\PositiveNumber', $this->m()->setScale(2));
  }

  /**
   * @expectedException        PhilipBrown\Math\Exceptions\InvalidNumberException
   * @expectedExceptionMessage what up is not a valid number.
   */
  public function testCreateInvalidRegion()
  {
    $this->m()->setScale('what up');
  }

  public function testAdd()
  {
    $this->assertEquals(3, $this->m()->add(1, 2)->getValue());
    $this->assertEquals(3.4, $this->m(1)->add(1, 2.4)->getValue());
    $this->assertEquals(3.44, $this->m(2)->add(1.04, 2.4)->getValue());
    $this->assertEquals(3.446, $this->m(4)->add(1.04, 2.406)->getValue());
    $this->assertEquals(3.4467, $this->m(4)->add(1.0407, 2.406)->getValue());
  }

  public function testCompare()
  {
    $this->assertEquals(1, $this->m()->compare(2, 1)->getValue());
    $this->assertEquals(0, $this->m(1)->compare(2.22, 2.223)->getValue());
    $this->assertEquals(-1, $this->m(2)->compare(1.03, 1.04)->getValue());
    $this->assertEquals(1, $this->m(4)->compare(2.4567, 2.4566)->getValue());
    $this->assertEquals(0, $this->m(4)->compare(5.666666, 5.66666666666668)->getValue());
  }

  public function testDivide()
  {
    $this->assertEquals(5, $this->m()->divide(10, 2)->getValue());
    $this->assertEquals(7.1, $this->m(1)->divide(14.2, 2)->getValue());
    $this->assertEquals(8.22, $this->m(2)->divide(16.44, 2)->getValue());
    $this->assertEquals(7.111, $this->m(3)->divide(21.333, 3)->getValue());
    $this->assertEquals(4.6789, $this->m(4)->divide(23.3945, 5)->getValue());
    $this->assertEquals(6.86432, $this->m(5)->divide(54.91456, 8)->getValue());
  }

  public function testModulus()
  {
    $this->assertEquals(0, $this->m()->modulus(4, 2)->getValue());
    $this->assertEquals(2, $this->m(1)->modulus(2, 4)->getValue());
    $this->assertEquals(0, $this->m(2)->modulus(4.44, 2.22)->getValue());
    $this->assertEquals(1, $this->m(4)->modulus(10, 3)->getValue());
    $this->assertEquals(34, $this->m(4)->modulus(242342.4532, 44.6643)->getValue());
  }

  public function testMultiply()
  {
    $this->assertEquals(8, $this->m()->multiply(4, 2)->getValue());
    $this->assertEquals(9.4, $this->m(1)->multiply(4.3, 2.2)->getValue());
    $this->assertEquals(9.46, $this->m(2)->multiply(4.3, 2.2)->getValue());
    $this->assertEquals(11.748, $this->m(3)->multiply(5.34, 2.2)->getValue());
    $this->assertEquals(11.9616, $this->m(4)->multiply(5.34, 2.24)->getValue());
  }

  public function testCreatingNumber()
  {
    $this->assertInstanceOf('PhilipBrown\Math\Number', $this->m()->create(2));
  }

  /**
   * @expectedException PhilipBrown\Math\Exceptions\InvalidNumberException
   * @expectedExceptionMessage what up is not a valid number.
   */
  public function testCreateInvalidNumber()
  {
    $this->m()->create('what up');
  }

  public function testPower()
  {
    $this->assertEquals(74.08, $this->m(2)->power(4.2, 3)->getValue());
    $this->assertEquals(243.4849, $this->m(4)->power(6.2444, 3)->getValue());
    $this->assertEquals(306591.054407, $this->m(6)->power(67.43, 3)->getValue());
    $this->assertEquals(1867.9684, $this->m(5)->power(43.22, 2)->getValue());
    $this->assertEquals(12862.24760, $this->m(5)->power(23.43, 3)->getValue());
  }

  public function testSquareRoot()
  {
    $this->assertEquals(1.414, $this->m(3)->squareRoot(2)->getValue());
    $this->assertEquals(7, $this->m(0)->squareRoot(49)->getValue());
    $this->assertEquals(7.528412, $this->m(6)->squareRoot(56.677)->getValue());
    $this->assertEquals(21.3122, $this->m(4)->squareRoot(454.213)->getValue());
    $this->assertEquals(5.6764622, $this->m(7)->squareRoot(32.222223344)->getValue());
  }

  public function testSubtract()
  {
    $this->assertEquals(3, $this->m()->subtract(5, 2)->getValue());
    $this->assertEquals(4.2, $this->m(1)->subtract(6.3, 2.1)->getValue());
    $this->assertEquals(6.21, $this->m(2)->subtract(8.33, 2.12)->getValue());
    $this->assertEquals(8.765, $this->m(3)->subtract(10.888, 2.123)->getValue());
    $this->assertEquals(13.7652, $this->m(4)->subtract(15.8889, 2.1237)->getValue());
  }

}
