<?php namespace PhilipBrown\Math\Test;

class NumberTest extends TestCase {

  public function testCreatingNumber()
  {
    $this->assertInstanceOf('PhilipBrown\Math\Number', $this->m()->create(2));
  }

  /**
   * @expectedException        PhilipBrown\Math\Exceptions\InvalidNumberException
   * @expectedExceptionMessage what up is not a valid number.
   */
  public function testCreateInvalidRegion()
  {
    $this->m()->create('what up');
  }

}
