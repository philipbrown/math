<?php namespace PhilipBrown\Math\Commands;

use PhilipBrown\Math\Number;
use PhilipBrown\Math\AnyNumber;
use PhilipBrown\Math\PositiveNumber;

class AddCommand implements Command
{
    /**
     * @var Number
     */
    private $left;

    /**
     * @var Number
     */
    private $right;

    /**
     * @var PositiveNumber
     */
    private $scale;

    /**
     * Create a new AddCommand
     *
     * @param Number $left
     * @param Number $right
     * @param PositiveNumber $scale
     * @return void
     */
    public function __construct(Number $left, Number $right, PositiveNumber $scale)
    {
        $this->left  = $left;
        $this->right = $right;
        $this->scale = $scale;
    }

    /**
     * Run the command
     *
     * @return Number
     */
    public function run()
    {
        return new AnyNumber(bcadd(
            $this->left->value(),
            $this->right->value(),
            $this->scale->value()
        ));
    }
}
