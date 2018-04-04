<?php

/**
 * Base class that define the attributes common by credit cards.
 */
abstract class CreditCard {

  /**
   * Number of the credit card.
   *
   * @var string
   */
  protected $number;

  /**
   * Card verification value.
   *
   * @var string
   */
  protected $cvv;

  /**
   * Value to discount by credit card.
   *
   * @var int
   */
  protected $discount;

  /**
   * Number of the card.
   *
   * @param string $number
   *   Number of the credit card.
   */
  public function setNumber($number) {
    $this->number = $number;
  }

  /**
   * Set the value to card verification value.
   *
   * @param string $cvv
   *   Card verification value.
   */
  public function setCvv($cvv) {
    $this->cvv = $cvv;
  }

  /**
   * Set value to discount of the card.
   *
   * @param int $discount
   *   Value to discount by credit card.
   */
  public function setDiscount($discount) {
    $this->discount = $discount;
  }

  /**
   * Return the value of the number.
   *
   * @return string
   *   Number of the card.
   */
  public function getNumber() {
    return $this->number;
  }

  /**
   * Retrieve the cvv of the card.
   *
   * @return string
   *   Card verification value.
   */
  public function getCvv() {
    return $this->cvv;
  }

  /**
   * Get value to discount of the card.
   *
   * @return int
   *   Value of discount.
   */
  public function getDiscount() {
    return $this->discount;
  }

}
