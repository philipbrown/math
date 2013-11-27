<?php namespace Philipbrown\Math\Command;

use Philipbrown\Math\Number;

class SquareRoot extends AbstractCommand implements CommandInterface {

  /**
   * @var int
   */
  protected $operand;

  /**
   * @var int
   */
  protected $scale;

  /**
   * Construct
   *
   * @param $left operand
   * @param $scale integer
   */
  public function __construct($operand, $scale)
  {
    $this->operand = $operand;
    $this->scale = $scale;
  }

  /**
   * Run
   *
   * @return Math\Number
   */
  public function run()
  {
    $operand = $this->isNumber($this->operand);

    return new Number(bcsqrt($operand->getValue(), $this->scale->getValue()));
  }

}
