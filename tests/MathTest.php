<?php namespace PhilipBrown\Math\Tests;

use PhilipBrown\Math\Math;

class MathTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_add_two_numbers()
    {
        $total = Math::add(1.04, 2.406, 4);

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(3.446, $total->value());
    }

    /** @test */
    public function should_compare_two_numbers()
    {
        $total = Math::compare(2.4567, 2.4566, 4);

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(1, $total->value());
    }

    /** @test */
    public function should_divide_two_numbers()
    {
        $total = Math::divide(23.3945, 5, 4);

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(4.6789, $total->value());
    }

    /** @test */
    public function should_find_the_modulus_of_two_numbers()
    {
        $total = Math::modulus(10, 3);

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(1, $total->value());
    }

    /** @test */
    public function should_multiply_two_numbers()
    {
        $total = Math::multiply(5.34, 2.2, 3);

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(11.748, $total->value());
    }

    /** @test */
    public function should_find_the_power_of_two_numbers()
    {
        $total = Math::power(43.22, 2, 5);

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(1867.9684, $total->value());
    }

    /** @test */
    public function should_find_the_square_root_of_two_numbers()
    {
        $total = Math::squareRoot(454.213, 4);

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(21.3122, $total->value());
    }

    /** @test */
    public function should_subtract_two_numbers()
    {
        $total = Math::subtract(10.888, 2.123, 3);

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(8.765, $total->value());
    }
}
