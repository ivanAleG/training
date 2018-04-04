<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Allows test over anonymous classes.
 */
class EntryPoint {

  /**
   * Execute the example.
   */
  public function start() {
    $register = new class implements LoggerAnonymousClassInterface {

      /**
       * {@inheritdoc}
       */
      public function log($message) {
        Printer::text("\nMessage: " . $message . "\n");
      }

    };

    $register->log('Hi world!');
  }

}

// Run test.
$entryPoint = new EntryPoint();
$entryPoint->start();
