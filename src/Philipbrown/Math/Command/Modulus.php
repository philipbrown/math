<?php namespace Philipbrown\Math\Command;

use Philipbrown\Math\Number;

class Modulus extends AbstractCommand implements CommandInterface {

  /**
   * @var int
   */
  protected $left;

  /**
   * @var int
   */
  protected $modulus;

  /**
   * Construct
   *
   * @param $left int
   * @param $modulus int
   */
  public function __construct($left, $modulus)
  {
    $this->left = $left;
    $this->modulus = $modulus;
  }

  /**
   * Run
   *
   * @return Math\Number
   */
  public function run()
  {
    $left = $this->isNumber($this->left);
    $modulus = $this->isNumber($this->modulus);

    return new Number(bcmod($left->getValue(), $modulus->getValue()));
  }

}
