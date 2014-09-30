<?php namespace PhilipBrown\Math\Tests;

use PhilipBrown\Math\PositiveNumber;

class PositiveNumberTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_create_number()
    {
        $number = new PositiveNumber(1);

        $this->assertEquals(1, $number->value());
        $this->assertInstanceOf('PhilipBrown\Math\PositiveNumber', $number);
    }

    /** @test */
    public function should_create_number_from_negative()
    {
        $this->setExpectedException('Assert\InvalidArgumentException');

        $number = new PositiveNumber(-1);
    }

    /** @test */
    public function should_fail_to_create_number_with_string()
    {
        $this->setExpectedException('Assert\InvalidArgumentException');

        $number = new PositiveNumber('1');
    }
}
