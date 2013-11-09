<?php namespace Philipbrown\Math\Test;

class AddTest extends TestCase {

  public function testAdd()
  {
    $this->assertEquals(3, $this->m()->add(1,2)->getValue());
  }

}
