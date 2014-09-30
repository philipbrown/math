<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\AnyNumber;
use PhilipBrown\Math\PositiveNumber;
use PhilipBrown\Math\Commands\ModulusCommand;

class SquareRootCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_find_the_square_root_of_two_numbers()
    {
        $command = new SquareRootCommand(new AnyNumber(32.222223344), new AnyNumber(7));

        $total = $command->run();

        $this->assertInstanceOf('PhilipBrown\Math\Number', $total);
        $this->assertEquals(5.6764622, $total->value());
    }
}
