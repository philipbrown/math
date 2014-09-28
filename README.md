#Math
**A simple wrapper for BC Math**

[![Build Status](https://travis-ci.org/philipbrown/math.png?branch=master)](https://travis-ci.org/philipbrown/math)
[![Code Coverage](https://scrutinizer-ci.com/g/philipbrown/math/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/philipbrown/math/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/philipbrown/math/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/philipbrown/math/?branch=master)

##Installation
Add `philipbrown/math` as a requirement to `composer.json`:

```json
{
  "require": {
    "philipbrown/math": "~1.0"
  }
}
```
Update your packages with `composer update`.

Inspired by [php-bcmath](https://github.com/notrix/php-bcmath).

##Usage
Using this package is really easy.

Create a new instance of Math:
```php
$m = new PhilipBrown\Math\Math;
```

Set your required scale:
```php
// Default is 0
$m->setScale(2);
```

Add two numbers:
```php
$n = $m->add(2, 2);
```

Subtract two numbers:
```php
$n = $m->subtract(6, 3);
```

Multiply two numbers:
```php
$n = $m->multiply(5, 5);
```

Divide two numbers:
```php
$n = $m->divide(100, 10);
```

Compare two numbers:
```php
$n = $m->compare(2, 2);
```

Find the modulus of two numbers:
```php
$n = $m->modulus(2, 4);
```

Find a number to the power of:
```php
$n = $m->power(4, 3);
```

Find the square root of a number:
```php
$n = $m->squareRoot(49);
```

You will be returned an instance of ```PhilipBrown\Math\Number``` in each case.

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
