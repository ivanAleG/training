<?php

/**
 * @file
 * Example of use structure control if.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

$age = 17;

if ($age < 18) {
  Printer::text("\nYou are underage!\n");
}
