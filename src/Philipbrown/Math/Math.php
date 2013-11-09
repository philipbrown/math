<?php namespace Philipbrown\Math;

class Math {

  /**
   * @var integer
   */
  protected $scale = 0;

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
    $scale = new PositiveNumber($scale);

    return $this->scale = $scale;
  }

  public function add($left, $right)
  {

  }

}
