<?php

/**
 * Receiver - class knows all its actions.
 */
class BasicCalc {

  /**
   * Right Value of the operation.
   *
   * @var mixed
   */
  private $a;

  /**
   * Left Value of the operation.
   *
   * @var mixed
   */
  private $b;

  /**
   * This method allow set the right value of the operation.
   *
   * @param mixed $a
   *   Right value of the operation.
   */
  public function setA($a) {
    $this->a = $a;
  }

  /**
   * This method allow set the left value of the operation.
   *
   * @param mixed $b
   *   Value left of the operation.
   */
  public function setB($b) {
    $this->b = $b;
  }

  /**
   * Addition operation.
   */
  public function addition() {
    $result = $this->a + $this->b;
    $this->printString("+", $result);
  }

  /**
   * Subtraction operation.
   */
  public function subtraction() {
    $result = $this->a - $this->b;
    $this->printString("-", $result);
  }

  /**
   * Multiplication operation.
   */
  public function multiplication() {
    $result = $this->a * $this->b;
    $this->printString("*", $result);
  }

  /**
   * Division operation.
   */
  public function division() {
    $result = $this->a / $this->b;
    $this->printString("/", $result);
  }

  /**
   * Print and format the string.
   *
   * @param string $operator
   *   Operator use in the operation.
   * @param mixed $result
   *   Result of the operation.
   */
  private function printString($operator, $result) {
    Printer::text($this->a . " " . $operator . " " . $this->b . ": " . $result . "\n");
  }

}
