<?php

/**
 * @file
 * Example of use structure control while.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

$table = 2;

$i = 1;

while ($i < 11) {
  Printer::text("\n" . $table . " * " . $i . " = " . ($table * $i) . "\n");
  $i++;
}
