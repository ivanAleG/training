<?php

/**
 * Class Person, that describe the properties of any person.
 */
class Person {

  /**
   * Person's name.
   *
   * @var string
   */
  private $name = '';

  /**
   * Person's last name.
   *
   * @var string
   */
  private $lastName = '';

  /**
   * Get person's name.
   *
   * @return mixed
   *   Person's name.
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Set person's name.
   *
   * @param mixed $name
   *   Person's name.
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * Get person's last name.
   *
   * @return mixed
   *   Person's last name.
   */
  public function getLastName() {
    return $this->lastName;
  }

  /**
   * Set person's last name.
   *
   * @param mixed $last_name
   *   Person's last name.
   */
  public function setLastName($last_name) {
    $this->lastName = $last_name;
  }

}
