<?php namespace Philipbrown\Math\Test;

class PowerTest extends TestCase {

  public function testAdd()
  {
    $this->assertEquals(74.08, $this->m(2)->power(4.2, 3)->getValue());
    $this->assertEquals(243.4849, $this->m(4)->power(6.2444, 3)->getValue());
    $this->assertEquals(306591.054407, $this->m(6)->power(67.43, 3)->getValue());
    $this->assertEquals(1867.9684, $this->m(5)->power(43.22, 2)->getValue());
    $this->assertEquals(12862.24760, $this->m(5)->power(23.43, 3)->getValue());
  }

}
