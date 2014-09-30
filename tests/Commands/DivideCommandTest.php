<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\AnyNumber;
use PhilipBrown\Math\PositiveNumber;
use PhilipBrown\Math\Commands\DivideCommand;

class DivideCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_divide_two_numbers()
    {
        $command = new DivideCommand(new AnyNumber(54.91456), new AnyNumber(8), new PositiveNumber(5));

        $total = $command->run();

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(6.86432, $total->value());
    }
}

