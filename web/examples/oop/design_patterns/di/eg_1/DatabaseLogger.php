<?php

/**
 * Allow simulate the register logs in the database.
 */
class DatabaseLogger implements LoggerInterface {

  /**
   * {@inheritdoc}
   */
  public function register($type, $message) {
    Printer::text("# Sending log to database... #\n\n");
    Printer::text("Type: " . $type . "\n");
    Printer::text("Message: " . $message . "\n");
  }

}
