<?php namespace Philipbrown\Math;

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
   * @param $value string
   * @return Math\Number
   */
  public function create($value)
  {
    return new Number($value);
  }

  /**
   * Set Scale
   *
   * @param $scale integer
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
   * @param $left string
   * @param $right string
   * @return Math\Number
   */
  public function add($left, $right)
  {
    $command = new Command\Add;

    return $command->run($left, $right, $this->scale);
  }

  /**
   * Subtract
   *
   * @param $left string
   * @param $right string
   * @return Math\Number
   */
  public function subtract($left, $right)
  {
    $command = new Command\Subtract;

    return $command->run($left, $right, $this->scale);
  }

  /**
   * Divide
   *
   * @param $left string
   * @param $right string
   * @return Math\Number
   */
  public function divide($left, $right)
  {
    $command = new Command\Divide;

    return $command->run($left, $right, $this->scale);
  }

  /**
   * Multiply
   *
   * @param $left string
   * @param $right string
   * @return Math\Number
   */
  public function multiply($left, $right)
  {
    $command = new Command\Multiply;

    return $command->run($left, $right, $this->scale);
  }

}
