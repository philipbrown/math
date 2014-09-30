<?php namespace PhilipBrown\Math;

use Assert\Assertion;

class PositiveNumber implements Number
{
    /**
     * @int
     */
    private $value;

    /**
     * Create a new AnyNumber
     *
     * @param int $value
     * @return void
     */
    public function __construct($value)
    {
        Assertion::min($value, 0);

        $this->value = $value;
    }

    /**
     * Return the value of the Number
     *
     * @return int
     */
    public function value()
    {
        return $this->value;
    }
}
