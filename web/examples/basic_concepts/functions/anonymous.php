<?php

/**
 * @file
 * Example for anonymous functions.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

/**
 * Function with arguments.
 *
 * @param string $text
 *   Text to say.
 */
$say = function ($text) {
  Printer::text("\nSay: " . $text . "\n");
};

$say("Hi world!");
$say("wua wua ...");

/*
 * Function with inheritance of variables pre-defined by reference.
 *
 */
$sentence = "hi world";

$capitalLetters = function () use (&$sentence) {
  $sentence = strtoupper($sentence);
};

$capitalLetters();
Printer::text("\nFirst entence: " . $sentence . "\n");

// The changed value in the parent scope is reflected inside the function call.
$sentence = "hi everyone";

$capitalLetters();
Printer::text("\nSecond sentence: " . $sentence . "\n");

/*
 * Function with inheritance of variables pre-defined and
 * arguments in the function.
 */

$b = 4;

$add = function ($a) use ($b) {
  Printer::text("\nAdd: " . $a . " + " . $b . " = " . ($a + $b) . "\n");
};

$add(23);
