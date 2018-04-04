<?php

/**
 * Allow simulate the register logs in the system.
 */
class SystemLogger implements LoggerInterface {

  /**
   * {@inheritdoc}
   */
  public function register($type, $message) {

    $date = new DateTime();
    Printer::text("\n# Sending log to syslog... #\n\n");
    Printer::text("Date: " . $date->getTimestamp() . " | Type: " . $type . " | Message: " . $message . "\n");
  }

}
