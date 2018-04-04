<?php

/**
 * Base clase for manage the databases' queries.
 */
abstract class Crud {

  private $table = '';
  protected $fields = [];

  /**
   * Crud constructor.
   *
   * @param string $table
   *   Name of the table.
   */
  public function __construct($table) {
    $this->table = $table;
  }

  /**
   * Allows to simulate the create of register.
   *
   * @param array $arguments
   *   Data of the register to insert.
   */
  public function add(array $arguments = []) {

    $output = "\nQuery: INSERT INTO ";
    $output .= $this->table . " ";
    $output .= "(" . implode(',', $this->fields) . ") ";
    $output .= "VALUES (" . implode(',', $arguments) . ")\n";

    Printer::text($output);
  }

  /**
   * Allows simulate get register in the database.
   *
   * @param string $id
   *   Id of the register in the database.
   */
  public function get($id) {
    Printer::text("\nQuery: SELECT * FROM " . $this->table . " WHERE id = " . $id . "\n");
  }

  /**
   * Allows simulate delete register in the database.
   *
   * @param string $id
   *   Id of the register in the database.
   */
  public function delete($id) {
    Printer::text("\nQuery: DELETE FROM " . $this->table . " WHERE id = " . $id . "\n");
  }

}
