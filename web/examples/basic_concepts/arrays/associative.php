<?php

/**
 * @file
 * Example for implements a arrays associative.
 */

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

Printer::text("# Arrays with named keys #\n\n");

Printer::text("Long array form:\n\n");

$article = array(
  "id"      => 1,
  "title"   => "Drupal Bootcamp - title",
  "content" => "Drupal Bootcamp - content",
);

Printer::dump($article);

Printer::text("\nShort array form:\n\n");

$post = [
  "id"                => 1,
  "title"             => "Drupal Bootcamp - title",
  "short_description" => "Drupal Bootcamp - short description",
];

Printer::dump($post);
