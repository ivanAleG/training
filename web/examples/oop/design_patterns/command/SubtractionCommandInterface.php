<?php

/**
 * Command class to subtract operation.
 */
class SubtractionCommandInterface implements CommandInterface {

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
    $this->calculator->subtraction();
  }

}
