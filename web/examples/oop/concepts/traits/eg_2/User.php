<?php

/**
 * Allow create and update user and trigger sent message to log.
 */
class User extends Person {

  use Logger;

  /**
   * User constructor.
   *
   * @param string $name
   *   Person's name.
   * @param string $last_name
   *   Person's name.
   */
  public function __construct($name, $last_name) {
    $this->create($name, $last_name);
  }

  /**
   * Allow create a user.
   *
   * @param string $name
   *   Person's name.
   * @param string $last_name
   *   Person's last name.
   */
  public function create($name, $last_name) {
    $this->setName($name);
    $this->setLastName($last_name);

    $this->register($this->getName() . " " . $this->getLastname() . " was created.");
  }

  /**
   * Allow update the person's name.
   *
   * @param string $name
   *   Person's name.
   */
  public function udpateName($name) {
    $this->setName($name);
    $this->register("Name: " . $this->getName() . " was updated.");
  }

  /**
   * Allow update the person's last name.
   *
   * @param string $last_name
   *   Person's last name.
   */
  public function udpateLastName($last_name) {
    $this->setLastName($last_name);
    $this->register("Last name: " . $this->getLastName() . " was updated.");
  }

}
