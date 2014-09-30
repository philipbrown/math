<?php namespace PhilipBrown\Math\Tests;

use PhilipBrown\Math\AnyNumber;

class AnyNumberTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_create_number()
    {
        $number = new AnyNumber(1);

        $this->assertEquals(1, $number->value());
        $this->assertInstanceOf('PhilipBrown\Math\AnyNumber', $number);
    }

    /** @test */
    public function should_create_number_from_negative()
    {
        $number = new AnyNumber(-1);

        $this->assertEquals(-1, $number->value());
        $this->assertInstanceOf('PhilipBrown\Math\AnyNumber', $number);
    }

    /** @test */
    public function should_fail_to_create_number_with_string()
    {
        $this->setExpectedException('Assert\InvalidArgumentException');

        $number = new AnyNumber('hello');
    }
}
