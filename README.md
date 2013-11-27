#Math
**A simple wrapper for BC Math**

[![Build Status](https://travis-ci.org/philipbrown/math.png)](https://travis-ci.org/philipbrown/math)

##Installation
Add `philipbrown/math` as a requirement to `composer.json`:

```json
{
  "require": {
    "philipbrown/math": "dev-master"
  }
}
```
Update your packages with `composer update`.

Inspired by [php-bcmath](https://github.com/notrix/php-bcmath).

##Usage
Using this package is really easy.

Create a new instance of Math:
```php
$m = new Philipbrown\Math\Math;
```

Set your required scale:
```php
// Default is 0
$m->setScale(2);
```

Add two numbers:
```php
$m->add(2, 2); // 4
```

Subtract two numbers:
```php
$m->subtract(6, 3); // 3
```

Multiply two numbers:
```php
$m->multiply(5, 5); // 25
```

Divide two numbers:
```php
$m->divide(100, 10); // 10
```

Compare two numbers:
```php
$m->compare(2, 2); // 0
```

Find the modulus of two numbers:
```php
$m->modulus(2, 4); // 2
```

Find a number to the power of:
```php
$m->power(4, 3); // 64
```

Find the square root of a number:
```php
$m->squareRoot(49); // 7
```

You will be returned an instance of ```Philipbrown\Math\Number``` in each case.

## License
The MIT License (MIT)

Copyright (c) 2013 Philip Brown.

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
