<?php namespace Philipbrown\Math\Test;

class MathTest extends TestCase {

  public function testSetScale()
  {
    $this->assertInstanceOf('Philipbrown\Math\PositiveNumber', $this->m->setScale(2));
  }

  /**
   * @expectedException        Philipbrown\Math\Exception\InvalidNumberException
   * @expectedExceptionMessage what up is not a valid number.
   */
  public function testCreateInvalidRegion()
  {
    $this->m->setScale('what up');
  }

}
