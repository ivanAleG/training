<?php

/**
 * @file
 * Example for implements a arrays multidimensional.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

Printer::text("\n# Arrays containing one or more arrays #\n");

Printer::text("\nLong array form:\n\n");

$post = array(
  'id'    => 8,
  'title' => 'Lorem ipsum',
  'tags'  => array(
    'test',
    'example',
    'demostration',
  ),
);

Printer::dump($post);

Printer::text("\nShort array form:\n\n");

$post = [
  'id'    => 8,
  'title' => 'Lorem ipsum',
  'tags'  => [
    'bootcamp',
    'example',
    'demostration',
    'drupal',
    'php',
  ],
];

Printer::dump($post);
