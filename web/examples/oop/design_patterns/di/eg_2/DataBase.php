<?php

/**
 * Base for create any sub-class.
 */
abstract class DataBase {

  /**
   * Information of the connection.
   *
   * @var array
   */
  protected $connection;

  /**
   * Set data to connection.
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
  public function setDataConnection($host, $database, $user, $password) {
    $this->connection = [
      'host' => $host,
      'database' => $database,
      'user' => $user,
      'password' => $password,
    ];
  }

  /**
   * Method to execute any query.
   *
   * @param string $query_text
   *   Text to execute.
   */
  abstract public function query($query_text);

  /**
   * Markup to text that describe the content for the reader.
   *
   * @param string $key
   *   Title of the text.
   * @param mixed $value
   *   Content of the text.
   * @param int $size
   *   Size of the line.
   */
  protected function markupText($key, $value, $size = 60) {
    $text = $key . (empty($value) ? "" : ": ") . $value;

    Printer::text("| " . $text . str_repeat(" ", ($size - (strlen($text) + 4))) . " |\n");
  }

  /**
   * Allow add lines of the same characters and specific size.
   *
   * @param string $point
   *   Character for the line.
   * @param mixed $size
   *   Size of the line.
   */
  protected function renderLine($point, $size) {
    Printer::text(str_repeat($point, $size) . "\n");
  }

}
