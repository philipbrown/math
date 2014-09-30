<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\Number;
use PhilipBrown\Math\AnyNumber;

class SquareRootCommand implements Command
{
    /**
     * @var Number
     */
    private $operand;

    /**
     * @var Number
     */
    private $scale;

    /**
     * Create a new SquareRootCommand
     *
     * @param Number $operand
     * @param Number $scale
     * @return void
     */
    public function __construct(Number $operand, Number $scale)
    {
        $this->operand = $operand;
        $this->scale   = $scale;
    }

    /**
     * Run the command
     *
     * @return Number
     */
    public function run()
    {
        return new AnyNumber(bcsqrt(
            $this->operand->value(),
            $this->scale->value()
        ));
    }
}
