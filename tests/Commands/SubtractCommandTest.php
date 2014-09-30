<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\AnyNumber;
use PhilipBrown\Math\PositiveNumber;
use PhilipBrown\Math\Commands\SubtractCommand;

class SubtractCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_subtract_two_numbers()
    {
        $command = new SubtractCommand(new AnyNumber(15.8889), new AnyNumber(2.1237), new PositiveNumber(4));

        $total = $command->run();

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(13.7652, $total->value());
    }
}
