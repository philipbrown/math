<?php namespace PhilipBrown\Math\Command;

use PhilipBrown\Math\Number;

class SquareRoot extends AbstractCommand implements CommandInterface {

  /**
   * The operand, as a string.
   *
   * @var string
   */
  protected $operand;

  /**
   * This optional parameter is used to set the number of
   * digits after the decimal place in the result.
   *
   * @var int
   */
  protected $scale;

  /**
   * Create a new instance of the SquareRoot command
   *
   * @param $left string
   * @param $scale integer
   */
  public function __construct($operand, $scale)
  {
    $this->operand = $operand;
    $this->scale = $scale;
  }

  /**
   * Run the command
   *
   * @return PhilipBrown\Math\Number
   */
  public function run()
  {
    $operand = $this->isNumber($this->operand);

    return new Number(bcsqrt($operand->getValue(), $this->scale->getValue()));
  }

}
