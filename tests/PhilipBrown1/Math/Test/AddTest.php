<?php namespace Philipbrown\Math\Test;

class AddTest extends TestCase {

  public function testAdd()
  {
    $this->assertEquals(3, $this->m()->add(1, 2)->getValue());
    $this->assertEquals(3.4, $this->m(1)->add(1, 2.4)->getValue());
    $this->assertEquals(3.44, $this->m(2)->add(1.04, 2.4)->getValue());
    $this->assertEquals(3.446, $this->m(4)->add(1.04, 2.406)->getValue());
    $this->assertEquals(3.4467, $this->m(4)->add(1.0407, 2.406)->getValue());
  }

}
