<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\Number;
use PhilipBrown\Math\AnyNumber;

class ModulusCommand implements Command
{
    /**
     * @var Number
     */
    private $operand;

    /**
     * @var Number
     */
    private $modulus;

    /**
     * Create a new ModulusCommand
     *
     * @param Number $operand
     * @param Number $modulus
     * @return void
     */
    public function __construct(Number $operand, Number $modulus)
    {
        $this->operand  = $operand;
        $this->modulus  = $modulus;
    }

    /**
     * Run the command
     *
     * @return Number
     */
    public function run()
    {
        return new AnyNumber(bcmod(
            $this->operand->value(),
            $this->modulus->value()
        ));
    }
}
