<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Class EntryPoint to test the design pattern.
 */
class EntryPoint {

  /**
   * Database object.
   *
   * @var OracleDatabase
   */
  private $database;

  /**
   * Execute the functionality of the Dependency injection pattern.
   */
  public function start() {

    $this->setDatabase(new OracleDatabase(
      '10.10.0.3',
      'oracle_db',
      'oracle_user',
      'oracle_password'
    ));

    $this->database->query("select * from users");

    $this->setDatabase(new MysqlDatabase(
      '10.10.1.4',
      'mysql_db',
      'mysql_user',
      'mysql_password'
    ));

    $this->database->query("select * from logs");
  }

  /**
   * Set object of the database.
   *
   * @param \DataBase $database
   *   Object that allow connect to any Connector database.
   */
  public function setDatabase(DataBase $database) {
    $this->database = $database;
  }

}

// Test.
$entry_point = new EntryPoint();
$entry_point->start();
