<?php

/**
 * Class factory that dynamically instance any subclass of the CreditCard.
 */
class CreditCardFactory {

  /**
   * Build a instance of any subclass of the CreditCard.
   *
   * @param string $type
   *   Name of subclass.
   */
  public static function build($type) {
    $base_class = 'CreditCard';
    $class_name = ucfirst($type) . $base_class;

    if (class_exists($class_name) && is_subclass_of($class_name, $base_class)) {

      return new $class_name();
    }

    Printer::text('The credit card of type "' . $type . '" not exist.');
  }

}
