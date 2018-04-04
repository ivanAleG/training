<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  
  include $class_name . '.php';
});

$triangle = new Triangle();

/**
 * Allows test the interface.
 */
class EntryPoint {

  /**
   * Execute example.
   */
  public function start() {
    $triangle = new Triangle();

    $triangle->area();
    $triangle->draw();

    Printer::text("\n" . str_repeat('-', 50) . "\n");

    $circle = new Circle();

    $circle->area();
    $circle->draw();
  }

}

// Run test.
$entryPoint = new EntryPoint();
$entryPoint->start();
