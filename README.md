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
// Add
$number = Math::add(1.04, 2.406, 4);

// Compare
$number = Math::compare(2.4567, 2.4566, 4);

// Divide
$number = Math::divide(23.3945, 5, 4);

// Modulus
$number = Math::modulus(10, 3);

// Multiply
$number = Math::multiply(5.34, 2.2, 3);

// Power
$number = Math::power(43.22, 2, 5);

// Square Root
$number = Math::squareRoot(454.213, 4);

// Subtract
$number = Math::subtract(10.888, 2.123, 3);
```

## License
The MIT License (MIT)

Copyright (c) 2014 Philip Brown.

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
