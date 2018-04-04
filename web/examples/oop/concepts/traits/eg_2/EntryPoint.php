<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Traits using inheritance multiple.
 */
class EntryPoint {

  /**
   * Execute example.
   */
  public function start() {
    $user = new User('Nicolas', 'Texla');

    $user->udpateName('Nicola');
    $user->udpateLastName('Tesla');
  }

}

// Run test.
$entryPoint = new EntryPoint();
$entryPoint->start();
