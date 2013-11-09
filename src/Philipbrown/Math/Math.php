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
   * @return
   */
  public function add($left, $right)
  {
    $command = new Command\Add;

    return $command->run($left, $right, $this->scale);
  }


}
