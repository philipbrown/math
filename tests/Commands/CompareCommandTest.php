<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\AnyNumber;
use PhilipBrown\Math\PositiveNumber;
use PhilipBrown\Math\Commands\CompareCommand;

class CompareCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_compare_two_numbers()
    {
        $command = new CompareCommand(new AnyNumber(1.03), new AnyNumber(1.04), new PositiveNumber(2));

        $total = $command->run();

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(-1, $total->value());
    }
}
