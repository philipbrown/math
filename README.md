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

// Each of the following examples return an instance of `Number`:
$number = Math::add(1.04, 2.406, 4);
$number = Math::compare(2.4567, 2.4566, 4);
$number = Math::divide(23.3945, 5, 4);
$number = Math::modulus(10, 3);
$number = Math::multiply(5.34, 2.2, 3);
$number = Math::power(43.22, 2, 5);
$number = Math::squareRoot(454.213, 4);
$number = Math::subtract(10.888, 2.123, 3);
```
