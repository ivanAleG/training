<?php

/**
 * Allows register any event.
 */
trait Logger {

  /**
   * Register text in the log.
   *
   * @param string $text
   *   Text to print.
   */
  public function register($text) {
    Printer::text("\n" . $text . "\n");
  }

}
