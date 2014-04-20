<?php namespace PhilipBrown\Math\Command;

use PhilipBrown\Math\Number;

class Add extends AbstractCommand implements CommandInterface {

  /**
   * The left operand, as a string
   *
   * @var string
   */
  protected $left;

  /**
   * The right operand, as a string.
   *
   * @var string
   */
  protected $right;

  /**
   * This optional parameter is used to set the number
   * of digits after the decimal place in the result.
   *
   * @var int
   */
  protected $scale;

  /**
   * Create a new instance of the Add command
   *
   * @param $left string
   * @param $right string
   * @param $scale integer
   */
  public function __construct($left, $right, $scale)
  {
    $this->left = $left;
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
    $left = $this->isNumber($this->left);
    $right = $this->isNumber($this->right);

    return new Number(bcadd($left->getValue(), $right->getValue(), $this->scale->getValue()));
  }

}
