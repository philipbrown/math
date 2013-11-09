<?php namespace Philipbrown\Math\Test;

class NumberTest extends TestCase {

  public function testCreatingNumber()
  {
    $this->assertInstanceOf('Philipbrown\Math\Number', $this->m->create(2));
  }

  /**
   * @expectedException        Philipbrown\Math\Exception\InvalidNumberException
   * @expectedExceptionMessage what up is not a valid number.
   */
  public function testCreateInvalidRegion()
  {
    $this->m->create('what up');
  }

}
