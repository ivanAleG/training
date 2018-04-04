<?php

/**
 * Class that manage the database connection.
 */
class DataBaseTrait {

  use SingletonTrait;

  /**
   * Information of the connection.
   *
   * @var array
   */
  private $conneciton = [];

  /**
   * Information of the connection.
   *
   * @param string $host
   *   Url host.
   * @param string $database
   *   Name of database.
   * @param string $user
   *   User of database.
   * @param string $password
   *   Password of database user.
   */
  public function setConnection($host, $database, $user, $password) {
    $this->connection = [
      'host'     => $host,
      'database' => $database,
      'user'     => $user,
      'password' => $password,
    ];
  }

  /**
   * Information of the current instance.
   *
   * @return string
   *   Information of the current instance.
   */
  public function __toString() {
    $output = "\n" . $this->connection['host'];
    $output .= " | " . $this->connection['database'];
    $output .= " | " . $this->connection['user'];
    $output .= " | " . $this->connection['password'] . "\n";

    return $output;
  }

}
