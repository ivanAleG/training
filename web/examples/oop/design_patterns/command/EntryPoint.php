<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Client - Responsible for creating commands and configurations to receiver.
 */
class EntryPoint {

  /**
   * Method that allow to client execute commands.
   */
  public function start() {
    $user = new User();

    $calculator = new BasicCalc();

    $calculator->setA(3);
    $calculator->setB(2);

    $add = new AdditionCommandInterface($calculator);

    $user->setCommand($add);
    $user->pressKey();

    $subtract = new SubtractionCommandInterface($calculator);

    $user->setCommand($subtract);
    $user->pressKey();

    $multiplication = new MultiplicationCommandInterface($calculator);

    $user->setCommand($multiplication);
    $user->pressKey();

    $division = new DivisionCommandInterface($calculator);

    $user->setCommand($division);
    $user->pressKey();
  }

}

// Run.
$entry_point = new EntryPoint();
$entry_point->start();
