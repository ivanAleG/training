<?php

/**
 * @file
 * Example of use structure control switch.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

$today = 5;

switch ($today) {
  case 1:
    Printer::text("\nMonday\n");
    break;

  case 2:
    Printer::text("\nTuesday\n");
    break;

  case 3:
    Printer::text("\nWednesday\n");
    break;

  case 4:
    Printer::text("\nThursday\n");
    break;

  case 5:
    Printer::text("\nFriday\n");
    break;

  case 6:
    Printer::text("\nSaturday\n");
    break;

  case 7:
    Printer::text("\nSunday\n");
    break;

  default:
    Printer::text("\nThis day not exist!\n");
    break;
}
