<?php

/**
 * Command class to division operation.
 */
class DivisionCommandInterface implements CommandInterface {

  /**
   * Object to work.
   *
   * @var BasicCalc
   */
  private $calculator;

  /**
   * Entrypoint that allow add receiver object.
   *
   * @param BasicCalc $calculator
   *   Receiver object to execute.
   */
  public function __construct(BasicCalc $calculator) {
    $this->calculator = $calculator;
  }

  /**
   * Execute the target method.
   */
  public function execute() {
    $this->calculator->division();
  }

}
