<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\AnyNumber;
use PhilipBrown\Math\PositiveNumber;
use PhilipBrown\Math\Commands\MultiplyCommand;

class MultiplyCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_multiply_two_numbers()
    {
        $command = new MultiplyCommand(new AnyNumber(5.34), new AnyNumber(2.24), new PositiveNumber(4));

        $total = $command->run();

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(11.9616, $total->value());
    }
}
