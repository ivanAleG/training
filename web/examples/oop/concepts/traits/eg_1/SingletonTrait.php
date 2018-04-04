<?php

/**
 * Allows implements method getInstance for singleton pattern design.
 */
trait SingletonTrait {

  /**
   * Instance of the object.
   *
   * @var mixed
   */
  private static $instance;

  /**
   * Instance singleton method.
   *
   * @return mixed
   *   a instance of the bject.
   */
  public static function getInstance() {

    if (!(self::$instance instanceof self)) {
      self::$instance = new self();
    }

    return self::$instance;
  }

}
