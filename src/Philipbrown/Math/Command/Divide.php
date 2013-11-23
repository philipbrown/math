<?php namespace Philipbrown\Math\Command;

use Philipbrown\Math\Number;

class Divide extends AbstractCommand implements CommandInterface {

  public function run($left, $right, $scale)
  {
    $left = $this->isNumber($left);
    $right = $this->isNumber($right);

    return new Number(bcdiv($left->getValue(), $right->getValue(), $scale->getValue()));
  }

}
