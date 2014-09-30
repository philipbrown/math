<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\AnyNumber;
use PhilipBrown\Math\PositiveNumber;
use PhilipBrown\Math\Commands\ModulusCommand;

class ModulusCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_find_the_modulus_of_two_numbers()
    {
        $command = new ModulusCommand(new AnyNumber(242342.4532), new AnyNumber(44.6643));

        $total = $command->run();

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(34, $total->value());
    }
}
