<?php

/**
 * @file
 * Example of use structure control foreach.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

$fruits = [
  'Pineapple',
  'Coconut',
  'Strawberry',
  'Peach',
];

// Without key array.
foreach ($fruits as $fruit) {
  Printer::text("\nValue: " . $fruit . "\n");
}

// With key array.
foreach ($fruits as $key => $fruit) {
  Printer::text("\nKey: " . $key . " Value: " . $fruit . "\n");
}

// Override value array.
$numbers = [
  2,
  4,
  6,
  8,
  10,
];

Printer::text("\nBefore to override:\n\n");
Printer::dump($numbers);

foreach ($numbers as &$number) {
  $number = $number * 3;
}

Printer::text("\nAfter to override:\n\n");
Printer::dump($numbers);
