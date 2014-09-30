<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\AnyNumber;
use PhilipBrown\Math\PositiveNumber;
use PhilipBrown\Math\Commands\AddCommand;

class AddCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_add_two_numbers()
    {
        $command = new AddCommand(new AnyNumber(1.0407), new AnyNumber(2.406), new PositiveNumber(4));

        $total = $command->run();

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(3.4467, $total->value());
    }
}
