<?php namespace PhilipBrown\Math\Command;

use PhilipBrown\Math\Number;

class Modulus extends AbstractCommand implements CommandInterface {

  /**
   * The left operand, as a string.
   *
   * @var string
   */
  protected $left;

  /**
   * The modulus, as a string.
   *
   * @var stribf
   */
  protected $modulus;

  /**
   * Create a new instance of the Modulus command
   *
   * @param $left string
   * @param $modulus string
   */
  public function __construct($left, $modulus)
  {
    $this->left = $left;
    $this->modulus = $modulus;
  }

  /**
   * Run the command
   *
   * @return PhilipBrown\Math\Number
   */
  public function run()
  {
    $left = $this->isNumber($this->left);
    $modulus = $this->isNumber($this->modulus);

    return new Number(bcmod($left->getValue(), $modulus->getValue()));
  }

}
