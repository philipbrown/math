<?php namespace PhilipBrown\Math\Test;

class MathTest extends TestCase {

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

}
