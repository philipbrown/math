#Math
**A simple wrapper for BC Math**

[![Build Status](https://travis-ci.org/philipbrown/math.png)](https://travis-ci.org/philipbrown/math)

This is really just a very simple wrapper for [BC Math](http://php.net/manual/en/book.bc.php). I'll add some nicer methods as and when I need them.

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

##Usage
Create a new instance of the Math object:
```php
$m = new Philipbrown\Math\Math;
```

### Add
```php
$m->add(2,2);         // '4'
$m->add(3.3,3.3);     // '6'
$m->add(3.3,3.4, 1);  // '6.7'
$m->add(1.234,2.4, 3) // '3.634'
```

### Subtract
```php
$m->subtract(4, 2);           // '2'
$m->subtract(12, 2.1, 1);     // '9.9'
$m->subtract(15, 4.877, 3);   // '10.123'
$m->subtract(15, 4.4456, 4);  // '10.5544'
```

### Multiply
```php
$m->multiply(6, 6);               // '36'
$m->multiply(5.4, 9.8, 2);        // '52.92'
$m->multiply(24.56, 45.76, 4);    // '1123.8656'
$m->multiply(65.864, 32.864, 6);  // '2164.554496'
```

### Divide
```php
$m->divide(49, 7);      // '7'
$m->divide(9.3, 3, 1);  // '3.1'
$m->divide(10, 3, 2);   // '3.33'
$m->divide(10, 3, 3);   // '3.333'
```

### Modulus
```php
$m->modulus(4, 2);  // '0'
$m->modulus(2, 4);  // '2'
$m->modulus(10, 3); // '1'
$m->modulus(20, 3); // '2'
```

### Square Root
```php
$m->squareRoot(49);    // '7'
$m->squareRoot(24, 7); // '4.8989794'
$m->squareRoot(35, 3); // '5.916'
$m->squareRoot(56, 5); // '7.48331'
```

### Compare
```php
$m->compare(23, 23);          // 0
$m->compare(23.45, 23.23, 2); // 1
$m->compare(99.98, 99.99, 2); // -1
```

### Power
```php
$m->power('4.2', '3', 2);   // '74.08'
$m->power('3.4', '3', 3);   // '39.304'
$m->power('56.6', '4', 4);  // '10262796.6736'
$m->power('4.222', '3', 6); // '75.258349'
```

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
