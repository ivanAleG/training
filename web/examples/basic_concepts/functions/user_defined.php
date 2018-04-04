<?php

/**
 * @file
 * Example for calls functions by user.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

Printer::text("\n# Without return #\n");

/**
 * Function without return.
 *
 * @param int $a
 *   Number left of the operation.
 * @param int $b
 *   Number right of the operation.
 */
function addition($a, $b) {
  Printer::text("\n" . $a . " + " . $b . " = " . ($a + $b) . "\n");
}

addition(5, 7);

Printer::text("\n# With return #\n");

/**
 * Function with return.
 *
 * @param int $a
 *   Number left of the operation.
 * @param int $b
 *   Number right of the operation.
 *
 * @return string
 *   Return of type string.
 */
function subtract($a, $b) {
  return "\n" . $a . " - " . $b . " = " . ($a - $b) . "\n";
}

$result_subtract = subtract(10, 7);

Printer::text($result_subtract);
Printer::text("\n# With restriction type of return value #\n");

/**
 * This method expose the specific type that function must return.
 *
 * @param int $a
 *   Number left of the operation.
 * @param int $b
 *   Number right of the operation.
 *
 * @return string
 *   The type of parameter can be array/string/bool/int/float.
 */
function division($a, $b) : string {
  return "\n" . $a . " / " . $b . " = " . ($a / $b) . "\n";
}

$result_division = division(63, 7);

Printer::text($result_division);
Printer::text("\n# Pass variable by reference #\n");

$text = 'Swim';

Printer::text("\nBefore: " . $text . "\n");

/**
 * Allows alter variable by reference.
 *
 * @param string $string
 *   Text to alter by reference.
 */
function alter_variable_by_reference(&$string) {
  $string = "Jump";
}

alter_variable_by_reference($text);

Printer::text("\nAfter: " . $text . "\n");
