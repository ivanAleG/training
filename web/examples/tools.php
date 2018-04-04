<?php

/**
 * Tool for printer or dump any variable.
 */
class Printer {

  /**
   * Allows print any variable to php cli or web.
   *
   * @param string $text
   *   Text to print.
   */
  public static function text($text) {
    if (php_sapi_name() !== 'cli') {
      $text = str_replace("\n", '<br>', $text);
      $text = str_replace("\t", '&ensp;', $text);
    }

    echo $text;
  }

  /**
   * Allows dump any variable.
   *
   * @param mixed $variable
   *   Variable to dump.
   */
  public static function dump($variable) {
    if (php_sapi_name() !== 'cli') {
      self::text("<pre>");
    }

    var_dump($variable);

    if (php_sapi_name() !== 'cli') {
      self::text("</pre>");
    }
  }

}
