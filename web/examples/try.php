<?php
/**
 * @file
 * Example for implements a arrays indexed.
 */
$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);
include_once $root . '/tools.php';
Printer::text("\n# Arrays with a numeric index #\n");
Printer::text("\nLong array form - without keys:\n");
$countries = array(
  'Colombia',
  'Japan',
  'France',
);
Printer::dump($countries);
Printer::text("\nLong array form - with keys:\n\n");
$countries = array(
  2 => 'Colombia',
  3 => 'Japan',
  4 => 'France',
);
Printer::dump($countries);
Printer::text("\nShort array form - without keys:\n\n");
$fruits = [
  'Pineapple',
  'Coconut',
  'Strawberry',
  'Peach',
];
Printer::dump($fruits);
Printer::text("\nShort array form - with keys:\n\n");
$fruits = [
  5 => 'Pineapple',
  6 => 'Coconut',
  7 => 'Strawberry',
  8 => 'Peach',
];
Printer::dump($fruits);

echo "Posicion 5 de arreglo fruits ".$fruits[5];
