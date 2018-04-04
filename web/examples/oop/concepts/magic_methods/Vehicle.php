<?php

/**
 * Example class for implements magic methods.
 */
class Vehicle {

  public $wheels = 0;
  public $doors = 0;
  private $data = [];

  /**
   * Is execute when the object is instantiated.
   */
  public function __construct() {
    Printer::text("\n__construct: Is execute when a object is instantiated\n\n");
  }

  /**
   * This magic method is execute when the variable is deleted.
   */
  public function __destruct() {
    Printer::text("\n__destruct: Is execute when a object go to unset.\n\n");
    Printer::text("\tId Object: " . spl_object_hash($this) . "\n\n");
  }

  /**
   * Print information of the object.
   *
   * This magic method is execute when the variable is printed using
   * echo or print.
   */
  public function __toString() {
    return "\n__toString: Is executed when a object is printed directly.\n\n";
  }

  /**
   * Is execute when a object is call as a function.
   *
   * @param string $variable
   *   Content of the variable.
   */
  public function __invoke($variable) {
    Printer::text("\n__invoke: Is execute when a object is call as a function: " . $variable . ".\n\n");
  }

  /**
   * Is returned when the object is dump.
   *
   * @return array
   *   the information split in an array.
   */
  public function __debugInfo() {
    return [
      'information' => '__debugInfo: Is executed when the object was sent as argument to var_dump function.',
      'prop_1' => 'value 1',
      'prop_2' => 'value 2',
      'prop_3' => 'value 3',
      'prop_N' => 'value N',
    ];
  }

  /**
   * Is invoke when the method called not exist.
   *
   * @param string $name
   *   Name of method.
   * @param array $arguments
   *   Arguments of method.
   */
  public function __call($name, array $arguments = []) {
    $output = "\n__call: Is executed when the method called not exist ";
    $output .= "e.g: Method => " . $name . ", ";
    $output .= "arguments => " . implode(', ', $arguments);
    $output .= "\n\n";

    Printer::text($output);
  }

  /**
   * Is invoke when the static method called not exist.
   *
   * @param string $name
   *   Name of method.
   * @param array $arguments
   *   Arguments of method.
   */
  public static function __callStatic($name, array $arguments = []) {
    $output = "\n__callStatic: Is executed when the static method called not exist ";
    $output .= "e.g: Method => " . $name . ", ";
    $output .= "arguments => " . implode(', ', $arguments);
    $output .= "\n\n";

    Printer::text($output);
  }

  /**
   * Is execute when try delete the object instance of the current class.
   *
   * @param string $name
   *   Name of object to delete.
   */
  public function __unset($name) {
    Printer::text("\n__unset: Is executed when the 'unset' method is used on inaccessible properties, property: " . $name . "\n\n");
  }

  /**
   * Is invoke when the current object is cloned.
   */
  public function __clone() {
    Printer::text("\n\n__clone: Is executed when a object is cloned.\n\n");
  }

  /**
   * Is execute when the object is dump export using eval function.
   *
   * @param array $array
   *   Properties of the object.
   */
  public static function __set_state(array $array = []) {
    Printer::text("__set_state: Is execute when the var_export is invoke from eval because is the output as string.\n");

    foreach ($array as $key => $value) {
      Printer::text("\n " . $key . ": " . print_r($value, TRUE) . "\n");
    }
  }

  /**
   * If the inaccessible property not exist add to array of properties.
   *
   * @param string $name
   *   Name of the property.
   * @param mixed $value
   *   Content of the property.
   */
  public function __set($name, $value) {
    $this->data[$name] = $value;

    Printer::dump($this->data);

    Printer::text("\n");
  }

  /**
   * Check if exist the inaccessible property and if exist return its content.
   *
   * @param string $name
   *   Name of the property.
   *
   * @return mixed|null
   *   Return the variable if that exist or null.
   */
  public function __get($name) {
    if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
    }

    return NULL;
  }

  /**
   * Check if exist the inaccessible property.
   *
   * @param string $name
   *   Name of the inaccessible property.
   *
   * @return bool
   *   Status of the variable.
   */
  public function __isset($name) {
    Printer::text("\n__isset: Is triggered by calling isset() or empty() on inaccessible properties.\n\n");

    Printer::text("\tCheck if the property: '" . $name . "' exist.\n\n");

    return isset($this->data[$name]);
  }

  /**
   * Is executed when the object is serialized.
   *
   * @return array
   *   Values to return.
   */
  public function __sleep() {
    Printer::text("\n__sleep: Is executed when the object instantiate from the class is serialized.\n\n");

    return ['wheels', 'doors', 'data'];
  }

  /**
   * Is executed when the object is unserialize.
   */
  public function __wakeup() {
    Printer::text("\n__wakeup: Is executed when the object reconstruct from a object serialized.\n\n");

    $this->wheels = 4;
  }

}
