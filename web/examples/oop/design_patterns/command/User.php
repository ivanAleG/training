<?php

/**
 * Invoker - Holds a command and execute that using the pressKey method.
 */
class User {

  /**
   * Object of Command type to execute a request.
   *
   * @var CommandInterface
   */
  private $command;

  /**
   * Set object request of Command type.
   *
   * @param CommandInterface $command
   *   Element that allow excute encapsulation of the method of the receiver.
   */
  public function setCommand(CommandInterface $command) {
    $this->command = $command;
  }

  /**
   * Request to command.
   */
  public function pressKey() {
    $this->command->execute();
  }

}
