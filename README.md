# Math
**A simple wrapper for BC Math**

[![Build Status](https://travis-ci.org/philipbrown/math.png?branch=master)](https://travis-ci.org/philipbrown/math)
[![Code Coverage](https://scrutinizer-ci.com/g/philipbrown/math/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/philipbrown/math/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/philipbrown/math/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/philipbrown/math/?branch=master)

## Installation
Add `philipbrown/math` as a requirement to `composer.json`:

```json
{
  "require": {
    "philipbrown/math": "~2.0"
  }
}
```
Update your packages with `composer update`.

## Usage
```php
use PhilipBrown\Math\Math;

/**
 * Add
 *
 * @param mixed $left
 * @param mixed $right
 * @param mixed $scale
 * @return PhilipBrown\Math\Number
 */
$number = Math::add(1.04, 2.406, 4);

/**
 * Compare
 *
 * @param mixed $left
 * @param mixed $right
 * @param mixed $scale
 * @return PhilipBrown\Math\Number
 */
$number = Math::compare(2.4567, 2.4566, 4);

/**
 * Divide
 *
 * @param mixed $left
 * @param mixed $right
 * @param mixed $scale
 * @return PhilipBrown\Math\Number
 */
$number = Math::divide(23.3945, 5, 4);

/**
 * Modulus
 *
 * @param mixed $operand
 * @param mixed $modulus
 * @return PhilipBrown\Math\Number
 */
$number = Math::modulus(10, 3);

/**
 * Multiply
 *
 * @param mixed $left
 * @param mixed $right
 * @param mixed $scale
 * @return PhilipBrown\Math\Number
 */
$number = Math::multiply(5.34, 2.2, 3);

/**
 * Power
 *
 * @param mixed $left
 * @param mixed $right
 * @param mixed $scale
 * @return PhilipBrown\Math\Number
 */
$number = Math::power(43.22, 2, 5);

/**
 * Square Root
 *
 * @param mixed $operand
 * @param mixed $scale
 * @return PhilipBrown\Math\Number
 */
$number = Math::squareRoot(454.213, 4);

/**
 * Subtract
 *
 * @param mixed $left
 * @param mixed $right
 * @param mixed $scale
 * @return PhilipBrown\Math\Number
 */
$number = Math::subtract(10.888, 2.123, 3);
```
