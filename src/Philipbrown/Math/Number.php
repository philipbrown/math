<?php namespace Philipbrown\Math;

use Philipbrown\Math\Exception\InvalidNumberException;

class Number implements NumberInterface {

  /**
   * @var string
   */
  protected $value;

  /**
   * Construct
   *
   * @param string $value
   */
  public function __construct($value)
  {
    if(!$this->isValid($value))
    {
      throw new InvalidNumberException("$value is not a valid number.");
    }

    $this->value = $value;
  }

  /**
   * Get Value
   *
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }

  /**
   * Is Valid
   *
   * @param string $number
   * @return bool
   */
  protected function isValid($number)
  {
    return (boolean) preg_match('/^\-?\d+(\.\d+)?$/', $number);
  }

}
