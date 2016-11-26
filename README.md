# debug
A simple class to print pretty values in PHP

Installation
-----------

There is one recommended way to install debug via [Composer](https://getcomposer.org/):


* adding the dependency to your ``composer.json`` file:

```js
  "require": {
      ..
      "fredericomartini/debug":"0.1.*",
      ..
  }
```

Simple usage
------------

```php
include_once 'Debug.php';

$var = array(
    'value' => array(
        'test' => 123
    ),
    'another_value' => '5555'
);
\Fma\Debug::run($var);

```

Output
-----
```
Array
(
    [value] => Array
        (
            [test] => 123
        )

    [another_value] => 5555
)
```