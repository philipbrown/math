<?php namespace Philipbrown\Math\Command;

use Philipbrown\Math\Number;

class Divide extends AbstractCommand implements CommandInterface {

  /**
   * @var int
   */
  protected $left;

  /**
   * @var int
   */
  protected $right;

  /**
   * @var int
   */
  protected $scale;

  /**
   * Construct
   *
   * @param $left integer
   * @param $right integer
   * @param $scale integer
   */
  public function __construct($left, $right, $scale)
  {
    $this->left = $left;
    $this->right = $right;
    $this->scale = $scale;
  }

  /**
   * Run
   *
   * @return Math\Number
   */
  public function run()
  {
    $left = $this->isNumber($this->left);
    $right = $this->isNumber($this->right);

    return new Number(bcdiv($left->getValue(), $right->getValue(), $this->scale->getValue()));
  }

}