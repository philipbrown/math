<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\AnyNumber;
use PhilipBrown\Math\PositiveNumber;
use PhilipBrown\Math\Commands\AddCommand;

class PowerCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_find_the_power_of_two_numbers()
    {
        $command = new PowerCommand(new AnyNumber(23.43), new AnyNumber(3), new PositiveNumber(5));

        $total = $command->run();

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(12862.24760, $total->value());
    }
}
