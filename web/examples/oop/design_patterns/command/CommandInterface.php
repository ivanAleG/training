<?php

/**
 * Structure base for class of command type.
 */
interface CommandInterface {

  /**
   * This method is the receiver of actions.
   */
  public function execute();

}
