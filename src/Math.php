<?php namespace PhilipBrown\Math;

use PhilipBrown\Math\Command\Add;
use PhilipBrown\Math\Command\Power;
use PhilipBrown\Math\Command\Divide;
use PhilipBrown\Math\Command\Compare;
use PhilipBrown\Math\Command\Modulus;
use PhilipBrown\Math\Command\Subtract;
use PhilipBrown\Math\Command\Multiply;
use PhilipBrown\Math\Command\SquareRoot;

class Math {

  /**
   * The scale to use
   *
   * @var integer
   */
  protected $scale;

  /**
   * Create a new instance of Math
   *
   * @return void
   */
  public function __construct()
  {
    $this->scale = new PositiveNumber(0);
  }

  /**
   * Create a new Number instance
   *
   * @param $value int
   * @return PhilipBrown\Math\Number
   */
  public function create($value)
  {
    return new Number($value);
  }

  /**
   * Set default scale parameter for all bc math functions
   *
   * @param $scale int
   * @return int
   */
  public function setScale($scale)
  {
    if(! $scale instanceof PositiveNumber)
    {
      $scale = new PositiveNumber($scale);
    }

    return $this->scale = $scale;
  }

  /**
   * Add two arbitrary precision numbers
   *
   * @param $left int
   * @param $right int
   * @return PhilipBrown\Math\Number
   */
  public function add($left, $right)
  {
    $command = new Add($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Subtract one arbitrary precision number from another
   *
   * @param $left int
   * @param $right int
   * @return PhilipBrown\Math\Number
   */
  public function subtract($left, $right)
  {
    $command = new Subtract($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Divide two arbitrary precision numbers
   *
   * @param $left int
   * @param $right int
   * @return PhilipBrown\Math\Number
   */
  public function divide($left, $right)
  {
    $command = new Divide($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Multiply two arbitrary precision numbers
   *
   * @param $left int
   * @param $right int
   * @return PhilipBrown\Math\Number
   */
  public function multiply($left, $right)
  {
    $command = new Multiply($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Compare two arbitrary precision numbers
   *
   * @param $left int
   * @param $right int
   * @return PhilipBrown\Math\Number
   */
  public function compare($left, $right)
  {
    $command = new Compare($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Get modulus of an arbitrary precision number
   *
   * @param $left int
   * @param $modulus int
   * @return PhilipBrown\Math\Number
   */
  public function modulus($left, $modulus)
  {
    $command = new Modulus($left, $modulus);

    return $command->run();
  }

  /**
   * Raise an arbitrary precision number to another
   *
   * @param $left int
   * @param $right int
   * @return PhilipBrown\Math\Number
   */
  public function power($left, $right)
  {
    $command = new Power($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Get the square root of an arbitrary precision number
   *
   * @param $operand int
   * @return PhilipBrown\Math\Number
   */
  public function squareRoot($operand)
  {
    $command = new SquareRoot($operand, $this->scale);

    return $command->run();
  }

}
