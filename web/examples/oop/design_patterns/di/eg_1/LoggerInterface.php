<?php

/**
 * Base structure to loggers class.
 */
interface LoggerInterface {

  /**
   * Register any message to log.
   *
   * @param string $type
   *   Type of the log.
   * @param string $message
   *   Message to log.
   */
  public function register($type, $message);

}
