<?php

/**
 * @file
 * Example of use structure control if/else.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

$age = 17;

if ($age < 18) {
  Printer::text("\nYou are underage!\n");
}
else {
  Printer::text("\nYou are of legal age!\n");
}


// Score of your performance.
$score = 3.2;
$result = '';

if ($score < 2) {
  $result = 'Partial achieved';
}
elseif ($score > 2 && $score < 3) {
  $result = 'Achieved';
}

elseif ($score > 3 && $score < 4) {
  $result = 'Exceeds expectations';
}
else {
  $result = 'widely exceeds expectations';
}

Printer::text("\nThe result of your test is: " . $result . "\n");
