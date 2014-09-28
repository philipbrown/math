<?php namespace PhilipBrown\Math\Command;

use PhilipBrown\Math\Number;

class Compare extends AbstractCommand implements CommandInterface
{
    /**
     * The left operand, as a string.
     *
     * @var string
     */
    private $left;

    /**
     * The right operand, as a string.
     *
     * @var string
     */
    private $right;

    /**
     * The optional scale parameter is used to set the number of digits
     * after the decimal place which will be used in the comparison.
     *
     * @var int
     */
    private $scale;

    /**
     * Create a new instance of the Compare command
     *
     * @param $left string
     * @param $right string
     * @param $scale integer
     */
    public function __construct($left, $right, $scale)
    {
        $this->left  = $left;
        $this->right = $right;
        $this->scale = $scale;
    }

    /**
     * Run the command
     *
     * @return PhilipBrown\Math\Number
     */
    public function run()
    {
        $left  = $this->isNumber($this->left);
        $right = $this->isNumber($this->right);

        return new Number(bccomp($left->getValue(), $right->getValue(), $this->scale->getValue()));
    }
}
