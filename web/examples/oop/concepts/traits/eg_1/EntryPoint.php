<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Basic implementation of the traits.
 */
class EntryPoint {

  /**
   * Execute example.
   */
  public function start() {
    $database = DataBaseTrait::getInstance();

    $database->setConnection(
      '127.0.0.1',
      'trait_database',
      'trait_user',
      'trait_password'
    );

    Printer::text("\nFirst instance:\n");
    Printer::text($database);

    $database_instance_2 = DataBaseTrait::getInstance();

    Printer::text("\nSecond instance:\n");
    Printer::text($database_instance_2);
  }

}

$entryPoint = new EntryPoint();
$entryPoint->start();
