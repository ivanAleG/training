<?php

/**
 * Mysql database connector.
 */
class MysqlDatabase extends DataBase {

  /**
   * MysqlDatabase constructor and set data connection.
   *
   * @param string $host
   *   Host url.
   * @param string $database
   *   Database name.
   * @param string $user
   *   User database to connect.
   * @param string $password
   *   Password database to connect.
   */
  public function __construct($host, $database, $user, $password) {
    $this->setDataConnection($host, $database, $user, $password);
  }

  /**
   * {@inheritdoc}
   */
  public function query($query_text) {
    $size_box = 40;

    Printer::text("\n");
    $this->renderLine('-', $size_box);
    $this->markupText('Connecting to Mysql database', '', $size_box);
    $this->renderLine('-', $size_box, $size_box);
    $this->markupText('Host', $this->connection['host'], $size_box);
    $this->markupText('Database', $this->connection['database'], $size_box);
    $this->markupText('User', $this->connection['user'], $size_box);
    $this->markupText('Password', $this->connection['password'], $size_box);

    $this->renderLine('-', $size_box);

    Printer::text("\n  Query: '" . $query_text . "'\n\n");
  }

}
