<?php namespace PhilipBrown\Math;

class Math {

  /**
   * @var integer
   */
  protected $scale;

  /**
   * Construct
   */
  public function __construct()
  {
    $this->scale = new PositiveNumber(0);
  }

  /**
   * Create
   *
   * @param $value int
   * @return Math\Number
   */
  public function create($value)
  {
    return new Number($value);
  }

  /**
   * Set Scale
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
   * Add
   *
   * @param $left int
   * @param $right int
   * @return Math\Number
   */
  public function add($left, $right)
  {
    $command = new Command\Add($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Subtract
   *
   * @param $left int
   * @param $right int
   * @return Math\Number
   */
  public function subtract($left, $right)
  {
    $command = new Command\Subtract($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Divide
   *
   * @param $left int
   * @param $right int
   * @return Math\Number
   */
  public function divide($left, $right)
  {
    $command = new Command\Divide($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Multiply
   *
   * @param $left int
   * @param $right int
   * @return Math\Number
   */
  public function multiply($left, $right)
  {
    $command = new Command\Multiply($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Compare
   *
   * @param $left int
   * @param $right int
   * @return Math\Number
   */
  public function compare($left, $right)
  {
    $command = new Command\Compare($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Modulus
   *
   * @param $left int
   * @param $modulus int
   * @return Math\Number
   */
  public function modulus($left, $modulus)
  {
    $command = new Command\Modulus($left, $modulus);

    return $command->run();
  }

  /**
   * Power
   *
   * @param $left int
   * @param $right int
   * @return Math\Number
   */
  public function power($left, $right)
  {
    $command = new Command\Power($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Square Root
   *
   * @param $operand int
   * @return Math\Number
   */
  public function squareRoot($operand)
  {
    $command = new Command\SquareRoot($operand, $this->scale);

    return $command->run();
  }

}
