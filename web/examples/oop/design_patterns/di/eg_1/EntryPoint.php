<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Class to test the design pattern.
 */
class EntryPoint {

  /**
   * Execute the functionality of the Dependency injection pattern.
   */
  public function start() {

    $db_logger = new DatabaseLogger();

    $this->log($db_logger, "notice", "variable undefined.");

    $sys_logger = new SystemLogger();

    $this->log($sys_logger, "notice", "Error the file not exist.");
  }

  /**
   * Register log.
   *
   * @param LoggerInterface $logger
   *   Object to send type and message.
   * @param string $type
   *   Type of the log.
   * @param string $message
   *   Message to log.
   */
  private function log(LoggerInterface $logger, $type, $message) {
    $logger->register($type, $message);
  }

}

// Test.
$entry_point = new EntryPoint();
$entry_point->start();
