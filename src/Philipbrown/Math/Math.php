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
    $command = new Command\Add($left, $right, $this->scale);

    return $command->run();
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
    $command = new Command\Subtract($left, $right, $this->scale);

    return $command->run();
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
    $command = new Command\Divide($left, $right, $this->scale);

    return $command->run();
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
    $command = new Command\Multiply($left, $right, $this->scale);

    return $command->run();
  }

  /**
   * Compare
   *
   * @param $left string
   * @param $right string
   * @return Math\Number
   */
  public function compare($left, $right)
  {
    $command = new Command\Compare($left, $right, $this->scale);

    return $command->run();
  }

}
