<?php

/**
 * Sub class destinate for Credit Card of Amex type.
 */
class VisaCreditCard extends CreditCard {

  /**
   * Constructor of the class.
   */
  public function __construct() {
    $this->setDiscount(10);
  }

}
