<?php namespace PhilipBrown\Math;

use PhilipBrown\Math\Exceptions\InvalidNumberException;

class Number implements NumberInterface
{
    /**
     * The value of the Number
     *
     * @var string
     */
    private $value;

    /**
     * Create a new instance of Number
     *
     * @param string $value
     * @param void
     */
    public function __construct($value)
    {
        if(!$this->isValid($value)) {
            throw new InvalidNumberException("$value is not a valid number.");
        }

        $this->value = $value;
    }

    /**
     * Get the value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Check to see if the number is valid
     *
     * @param string $number
     * @return bool
     */
    protected function isValid($number)
    {
        return (boolean) preg_match('/^\-?\d+(\.\d+)?$/', $number);
    }

    /**
     * Return the value when cast as a string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
