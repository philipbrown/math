<?php namespace Philipbrown\Math\Command;

use Philipbrown\Math\Number;

class Subtract extends AbstractCommand implements CommandInterface {

  /**
   * Run
   *
   * @param $left integer
   * @param $right integer
   * @param $scale integer
   * @return Math\Number
   */
  public function run($left, $right, $scale)
  {
    $left = $this->isNumber($left);
    $right = $this->isNumber($right);

    return new Number(bcsub($left->getValue(), $right->getValue(), $scale->getValue()));
  }

}
