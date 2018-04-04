<?php

/**
 * Sub class destinate for Credit Card of Amex type.
 */
class AmexCreditCard extends CreditCard {

  /**
   * Entry to class.
   */
  public function __construct() {
    $this->setDiscount(13);
  }

}
