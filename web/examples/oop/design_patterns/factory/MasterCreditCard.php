<?php

/**
 * Sub class destinate for Credit Card of Master card type.
 */
class MasterCreditCard extends CreditCard {

  /**
   * Constructor of the class.
   */
  public function __construct() {
    $this->setDiscount(15);
  }

}
