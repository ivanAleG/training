<?php

/**
 * @file
 * Example of use structure control for.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

$table = 3;

for ($i = 1; $i < 11; $i++) {
  Printer::text("\n" . $table . " * " . $i . " = " . ($table * $i) . "\n");
}
